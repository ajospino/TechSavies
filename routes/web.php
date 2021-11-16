<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Auth::routes();

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/home/user', 'App\Http\Controllers\HomeController@home')->name('home.indexUser');

Route::get('/admin/show/{id}', 'App\Http\Controllers\UserController@show')->name('admin.show');

Route::get('/admin/list', 'App\Http\Controllers\UserController@list')->name('admin.list');

Route::get('/admin/delete/{id}', 'App\Http\Controllers\UserController@delete')->name(
    'admin.delete'
);

Route::get('/product/list', 'App\Http\Controllers\ProductController@list')->name('product.list');

Route::get('/product/show/{id}', 'App\Http\Controllers\ProductController@show')->name(
    'product.show'
);
Route::get('/product/create', 'App\Http\Controllers\ProductController@add')->name('product.create');

Route::post('/product/save', 'App\Http\Controllers\ProductController@save')->name('product.save');

Route::post('/cart/add', 'App\Http\Controllers\CartController@add')->name('cart.add');

Route::get('/cart/show', 'App\Http\Controllers\CartController@show')->name('cart.show');

Route::post('/cart/checkout', 'App\Http\Controllers\CartController@checkout')->name(
    'cart.checkout'
);
Route::get('/cart/empty', 'App\Http\Controllers\CartController@empty')->name('cart.empty');

Route::get('/order/listing', 'App\Http\Controllers\OrderController@list')->name('order.list');

Route::get('/order/generatePDF', 'App\Http\Controllers\OrderController@orderPDF')->name(
    'order.generatePDF'
);

Route::get('/order/{id}', 'App\Http\Controllers\OrderController@show')->name('order.show');
?>
