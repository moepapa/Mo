<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::view('/', 'site.pages.homepage');
Route::view('/about', 'site.pages.about');
Route::view('/short', 'site.pages.short');
Route::view('/long', 'site.pages.long');
Route::view('/tree', 'site.pages.tree');
Route::view('/fruit', 'site.pages.fruit');
Route::view('/orchid', 'site.pages.orchid');
Route::view('/thazin', 'site.pages.thazin');
Route::view('/delipay', 'site.pages.delipay');
Route::get('/category/{slug}', 'Site\CategoryController@show')->name('category.show');
Route::get('/seedling/{slug}', 'Site\SeedlingController@show')->name('seedling.show');
Route::get('/search', 'Site\SeedlingController@search')->name('seedling.search');

Route::post('/seedling/add/cart', 'Site\SeedlingController@addToCart')->name('seedling.add.cart');
Route::get('/cart', 'Site\CartController@getCart')->name('checkout.cart');
Route::get('/cart/item/{id}/remove', 'Site\CartController@removeItem')->name('checkout.cart.remove');
Route::get('/cart/clear', 'Site\CartController@clearCart')->name('checkout.cart.clear');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/checkout', 'Site\CheckoutController@getCheckout')->name('checkout.index');
    Route::post('/checkout/order', 'Site\CheckoutController@placeOrder')->name('checkout.place.order');
    Route::get('checkout/complete', 'Site\CheckoutController@complete')->name('checkout.complete');
});

Route::get('account/orders', 'Site\AccountController@getOrders')->name('account.orders');

Auth::routes();
require 'admin.php';
