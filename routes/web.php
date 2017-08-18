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
    return view('Site.index');
});

Route::get('/products', function () {
    return view('Site.all-products');
});

Route::get('/stores', function () {
    return view('Site.all-stores');
});

Route::get('/workus', function () {
    return view('Site.single-page.work-with-us');
});

Route::get('/rules', function () {
    return view('Site.single-page.rules');
});

Route::get('/aboutus', function () {
    return view('Site.aboutus');
});

Route::get('/contactus', function () {
    return view('Site.contactus');
});

Route::get('/shekaiat', function () {
    return view('Site.shekaiat');
});

Route::get('/buyerinfo', function () {
    return view('Site.buyer-info');
});

Route::get('/fullinfo', function () {
    return view('Site.fill-userInfo');
});

Route::get('/factor', function () {
    return view('Site.factor');
});

Route::get('/cart', function () {
    return view('Site.cart');
});

Route::get('/faq', function () {
    return view('Site.single-page.faq');
});

Route::get('/market', function () {
    return view('Site.market');
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

