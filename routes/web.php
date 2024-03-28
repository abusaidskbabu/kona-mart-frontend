<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/bot', 'HomeController@bot')->name('bot');
Route::get('/', 'HomeController@home')->name('home');
Route::get('/home', 'HomeController@home')->name('home');
Route::get('/products', 'HomeController@products')->name('products');
Route::get('/product/details/{slug}', 'HomeController@productDetails')->name('product.details');
Route::get('/cart', 'HomeController@cart')->name('cart');
Route::get('/show-add-to-cart-modal', 'HomeController@showCartModal')->name('home.show.add.to.cart.modal');
Route::post('/product/variant_price', 'HomeController@variantPrice')->name('home.show.product.variant.price');
Route::post('/add-to-cart', 'HomeController@addToCart')->name('add.to.cart');
Route::get('/get-cart', 'HomeController@getCart')->name('get.cart');
Route::get('/remove-from-cart', 'HomeController@removeCart')->name('remove.cart');
Route::get('/update-cart-summary', 'HomeController@updateCartSummary')->name('update.cart.summary');
Route::get('/update-cart', 'HomeController@updateCart')->name('update.cart');
Route::get('/shipping-info', 'HomeController@shippingInfo')->name('shipping.info');
Route::get('/get-thana', 'HomeController@getThana')->name('get.thana');
Route::post('/shipping-info-store', 'HomeController@shippingInfoAdd')->name('shipping.info.add');
Route::get('/checkout', 'HomeController@checkout')->name('checkout');

Route::get('/cash-on-delivery', 'HomeController@cashonDelivery')->name('cash.on.delivery');
Route::get('/invoice/{order_id}', 'HomeController@invoice')->name('order.invoice');

Route::get('/signup', 'AuthController@signup')->name('signup');
Route::post('/signup-store', 'AuthController@signupStore')->name('signup.store');
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/authenticate', 'AuthController@authenticate')->name('authenticate');

Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');
