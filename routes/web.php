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
    return view('welcome');
});

Route::get('about', function () {
    return view('about_us/about_us');
});

Route::get('contact', function () {
    return view('contact_us/contact_us');
});

Route::get('browse-lifts', function () {
    return view('browse_lifts/lift_list');
});

Route::get('browse-lifts/details', function () {
    return view('browse_lifts/lift_details');
});

Route::get('offer-lift', function () {
    return view('dashboard/my_offers/offer_lift');
});

Route::get('account/register', function () {
    return view('account/register_user');
});

Route::get('account/login', function () {
    return view('account/login_user');
});

Route::get('account/logout', function () {
    return view('account/logout');
});

Route::get('how-it-works', function () {
    return view('knowledge_base/how_it_works');
});

Route::get('careers', function () {
    return view('knowledge_base/careers');
});

Route::get('frequently-asked-questions', function () {
    return view('knowledge_base/faqs');
});

Route::get('privacy-policy', function () {
    return view('knowledge_base/privacy_policy');
});

Route::get('terms-of-use', function () {
    return view('knowledge_base/terms_of_use');
});

Route::get('search', function () {
    return view('search/search_list');
});





Route::get('profile/user-code', function () {
    return view('profile/user_profile');
});

Route::get('profile/user-car-info', function () {
    return view('profile/user_car_info');
});

Route::get('profile/user-offers', function () {
    return view('profile/user_offers');
});

Route::get('profile/offer-details', function () {
    return view('profile/user_offers_details');
});

Route::get('profile/user-reviews', function () {
    return view('profile/user_reviews_rating');
});





Route::get('message/user_code', function () {
    return view('dashboard/messages/messages_list');
});




// dashboard

Route::get('dashboard/user-code', function () {
    return view('dashboard/profile/user_profile');
});

Route::get('dashboard/user-code/edit', function () {
    return view('dashboard/profile/user_profile_edit');
});




Route::get('dashboard/user-code/car-info', function () {
    return view('dashboard/car_info/car_info');
});

Route::get('dashboard/user-code/car-info/edit', function () {
    return view('dashboard/car_info/car_info_edit');
});




Route::get('dashboard/user-code/offers', function () {
    return view('dashboard/my_offers/my_offers_list');
});

Route::get('dashboard/user-code/offers/details', function () {
    return view('dashboard/my_offers/my_offers_details');
});

Route::get('dashboard/user-code/offers/edit', function () {
    return view('dashboard/my_offers/my_offers_edit');
});




Route::get('dashboard/user-code/lifts', function () {
    return view('dashboard/my_lifts/my_lifts_list');
});

Route::get('dashboard/user-code/lifts/details', function () {
    return view('dashboard/my_lifts/my_lifts_details');
});




Route::get('dashboard/user-code/requests', function () {
    return view('dashboard/requests/requests_list');
});

Route::get('dashboard/user-code/requests/referals', function () {
    return view('dashboard/requests/requests_referals');
});

Route::get('dashboard/user-code/requests/referals/details', function () {
    return view('dashboard/requests/requests_details');
});




Route::get('dashboard/user-code/reviews', function () {
    return view('dashboard/reviews_ratings/reviews_ratings');
});

