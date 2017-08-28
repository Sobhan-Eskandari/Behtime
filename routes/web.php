<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('site.index');
});

Route::get('/products', function () {
    return view('site.all-products');
});

Route::get('/stores', function () {
    return view('site.all-stores');
});

Route::get('/workus', function () {
    return view('site.single-page.work-with-us');
});

Route::get('/rules', function () {
    return view('site.single-page.rules');
});

Route::get('/aboutus', function () {
    return view('site.aboutus');
});

Route::get('/contactus', function () {
    return view('site.contactus');
});

Route::get('/shekaiat', function () {
    return view('site.shekaiat');
});

Route::get('/buyerinfo', function () {
    return view('site.buyer-info');
});

Route::get('/fullinfo', function () {
    return view('site.fill-userInfo');
});

Route::get('/factor', function () {
    return view('site.factor');
});

Route::get('/cart', function () {
    return view('site.cart');
});

Route::get('/faq', function () {
    return view('site.single-page.faq');
});

Route::get('/market', function () {
    return view('site.market');
});

Route::get('/profile/password', function (){
    return view('site.profile.changePass');
});

Route::get('/profile/edit', function (){
    return view('site.profile.edit');
});

Route::get('/profile/purchased', function (){
    return view('site.profile.purchased');
});

Route::get('/profile/bookmark', function (){
    return view('site.profile.bookmark');
});

