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

Route::get('/', function () {
    return view('site.index');
});

Route::get('/products', function () {
    return view('site.products');
});

Route::get('/stores', function () {
    return view('site.stores');
});

Route::get('/work-with-us', function () {
    return view('site.work-with-us');
});

Route::get('/rules', function () {
    return view('site.rules');
});

Route::get('/about', function () {
    return view('site.about');
});

Route::get('/contact', function () {
    return view('site.contact');
});

Route::get('/complaints', function () {
    return view('site.complaints');
});

Route::get('/buyer-info', function () {
    return view('site.order.buyer-info');
});

Route::get('/full-info', function () {
    return view('site.profile.fill-userInfo');
});

Route::get('/factor', function () {
    return view('site.order.factor');
});

Route::get('/cart', function () {
    return view('site.cart');
});

Route::get('/faq', function () {
    return view('site.faq');
});

Route::get('/shop', function () {
    return view('site.shop');
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

