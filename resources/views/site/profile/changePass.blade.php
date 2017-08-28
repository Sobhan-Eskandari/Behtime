@extends('layouts.profile')

@section('profile')

    <br><br>
    <h4 class="sormeie-theme dinar-title mt-5 text-center hi-fontSize-19">رمز عبور خود را ویرایش کنید</h4>

    <div class="row py-5 mt-5">
        <div class="col-6 pull-3 col-md-4 pull-md-4 ">
            <form>
                <input type="password" class="form-control m-input mt-3" id="exampleInputPassword1" placeholder="کلمه عبور فعلی">
                <input type="password" class="form-control m-input mt-3" id="exampleInputPassword1" placeholder="کلمه عبور جدید">
                <input type="password" class="form-control m-input mt-3 mb-5" id="exampleInputPassword1" placeholder=" تکرار کلمه عبور جدید">

                <button type="submit" class="col-12 col-lg-6 pull-lg-3 py-3 m-btn-round indigo white-text hi-shadow-1 mt-5 mb-5">تایید</button>
            </form>
        </div>
    </div>
@endsection