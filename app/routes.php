<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/tag/{tag}', 'FunctionsController@getTag');
Route::get('/orders', 'PayPalPaymentController@getSummary');
/* Email Route */
Route::post('/email', 'FunctionsController@getEmail');
/* End Email Route */

/* Preferred Customer Route */
Route::post('/get-card/apply', 'FunctionsController@getPreferredCustomer');
/* End Preferred Customer Route */

/* User Authentication */
Route::get('/register', 'FunctionsController@getRegister');
Route::get('/login', 'FunctionsController@getLogin');

Route::post('/register/new', 'FunctionsController@postRegister');
Route::post('/login/auth', 'FunctionsController@postLogin');

Route::get('/logout', 'FunctionsController@getLogout');
Route::get('/profile/me', 'FunctionsController@getMyProfile');
/* End User Authentication */

/* Admin Control Panel */
Route::get('/admin', 'FunctionsController@getAdminCP');
Route::get('/admin/products/new', 'FunctionsController@getNewListing');

Route::post('/products/new/create', 'FunctionsController@postNewListing');

Route::get('/admin/products/edit/{ID}', 'FunctionsController@getEditItem');
Route::post('/admin/products/edit/save/{ID}', 'FunctionsController@postEditItem');
Route::get('/admin/products/remove/{ID}', 'FunctionsController@getRemoveItem');

/* End Admin Control Panel */

Route::post('/contact/send', 'FunctionsController@postContactUs');

/* Shop Now Routing */
Route::get('/product/{itemID}', 'FunctionsController@getIndividualProduct');
/* End Shop Now Routing */

Route::get('/admin/edit/{eBayID}', 'FunctionsController@getReviseEbay');


/* Cart Routing */
Route::get('/cart', 'FunctionsController@getCart');
Route::post('/cart/add/{ID}', 'FunctionsController@postAddItemToCart');
Route::get('/cart/addFromShop/{ID}', 'FunctionsController@getAddItemFromShop');
Route::get('/cart/remove/{ID}', 'FunctionsController@getRemoveItemFromCart');
Route::get('/cart/add/one/{ID}', 'FunctionsController@getAddOneItemToCart');
/* End Cart Routing */
//Route::post('/search', 'FunctionsController@postSearch');
Route::post('/search', 'FunctionsController@getComingSoon');
Route::get('/checkout/finish', 'PayPalPaymentController@getStore');
Route::get('/checkout', 'PayPalPaymentController@store');

Route::get('/', 'HomeController@getIndex');
Route::get('/shop', 'HomeController@getShop');
Route::get('./shop', 'HomeController@getShop');
Route::get('../shop', 'HomeController@getShop');
Route::get('/coming-soon', 'HomeController@getComingSoon');
Route::get('./coming-soon', 'HomeController@getComingSoon');
Route::get('../coming-soon', 'HomeController@getComingSoon');
Route::get('/about', 'HomeController@getAbout');
Route::get('./about', 'HomeController@getAbout');
Route::get('../about', 'HomeController@getAbout');
Route::get('/catering', 'HomeController@getCatering');
Route::get('./catering', 'HomeController@getCatering');
Route::get('../catering', 'HomeController@getCatering');
Route::get('/delivery', 'HomeController@getDelivery');
Route::get('./delivery', 'HomeController@getDelivery');
Route::get('../delivery', 'HomeController@getDelivery');
Route::get('/careers', 'HomeController@getCareers');
Route::get('./careers', 'HomeController@getCareers');
Route::get('../careers', 'HomeController@getCareers');
Route::get('/contact', 'HomeController@getContact');
Route::get('./contact', 'HomeController@getContact');
Route::get('../contact', 'HomeController@getContact');
Route::get('/get-card', 'HomeController@getCard');
Route::get('./get-card', 'HomeController@getCard');
Route::get('../get-card', 'HomeController@getCard');
Route::get('/privacy-policy', 'HomeController@getPrivacyPolicy');
Route::get('./privacy-policy', 'HomeController@getPrivacyPolicy');
Route::get('../privacy-policy', 'HomeController@getPrivacyPolicy');
Route::get('/terms-of-use', 'HomeController@getTerms');
Route::get('./terms-of-use', 'HomeController@getTerms');
Route::get('..terms-of-use', 'HomeController@getTerms');
