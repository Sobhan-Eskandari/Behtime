@extends('layouts.profile')

@section('profile')


    <!-- Info Section -->
    <div class="cd-main-content mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-11 text-center">
                <div class="row text-center">
                    <div class="col-12">
                        <h1 class="hi-fontSize-23 green-text dinar-title">تاریخچه خرید</h1>
                        <hr class="m-fullLine green-line" style="width: 7%">
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12 col-lg-12">
                        <div class="table-responsive">
                            <table class="behtime-table" style="width:100%">
                                <tr>
                                    <th>شرح محصول</th>
                                    <th>فروشگاه</th>
                                    <th>تعداد</th>
                                    <th>قیمت کل</th>
                                    <th class="borderLeft-theme">تاریخ</th>
                                </tr>

                                <!-- Har Product -->
                                <tr class="borderBottom-theme">
                                    <td>
                                        <p class="indigo-text hi-lineHeight-25">درایو DVD اکسترنال لنوو مدل DB65</p>
                                    </td>
                                    <td>غلامی</td>
                                    <td>۱ عدد</td>
                                    <td class="green-text"> ۱.۲۰۰.۰۰۰ تومان</td>
                                    <td class="borderLeft-theme">۱۳۹۵/۵/۵</td>
                                </tr>
                                <!-- Har Product -->
                                <tr class="borderBottom-theme">
                                    <td>
                                        <p class="indigo-text hi-lineHeight-25">درایو DVD اکسترنال لنوو مدل DB65</p>
                                    </td>
                                    <td>غلامی</td>
                                    <td>۱ عدد</td>
                                    <td class="green-text"> ۱.۲۰۰.۰۰۰ تومان</td>
                                    <td class="borderLeft-theme">۱۳۹۵/۵/۵</td>
                                </tr>
                                <!-- Har Product -->
                                <tr class="borderBottom-theme">
                                    <td>
                                        <p class="indigo-text hi-lineHeight-25">درایو DVD اکسترنال لنوو مدل DB65</p>
                                    </td>
                                    <td>غلامی</td>
                                    <td>۱ عدد</td>
                                    <td class="green-text"> ۱.۲۰۰.۰۰۰ تومان</td>
                                    <td class="borderLeft-theme">۱۳۹۵/۵/۵</td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection