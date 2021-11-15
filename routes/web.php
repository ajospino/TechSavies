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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home/user', 'App\Http\Controllers\HomeController@home')->name('home.indexUser');

Route::get('/admin/show/{id}', 'App\Http\Controllers\UserController@show')->name('admin.show');

Route::get('/admin/list', 'App\Http\Controllers\UserController@list')->name('admin.list');

Route::get('/admin/delete/{id}', 'App\Http\Controllers\UserController@delete')->name(
    'admin.delete'
);

Auth::routes();

Route::get('/product/list', 'App\Http\Controllers\ProductController@list')->name('product.list');
Route::get('/product/show/{id}', 'App\Http\Controllers\ProductController@show')->name(
    'product.show'
);
Route::get('/product/create', 'App\Http\Controllers\ProductController@add')->name('product.create');
Route::post('/product/save', 'App\Http\Controllers\ProductController@save')->name('product.save');

Route::get('/cart/add/{id}', 'App\Http\Controllers\CartController@add')->name('cart.add');

Route::get('/cart/show', 'App\Http\Controllers\CartController@show')->name('cart.show');

Route::get('/combo/list', 'App\Http\Controllers\ComboController@list')->name('combo.list');
Route::get('/combo/show/{id}', 'App\Http\Controllers\ComboController@show')->name('combo.show');
Route::get('/combo/edit/{id}', 'App\Http\Controllers\ComboController@edit')->name('combo.edit');
Route::get('/combo/create', 'App\Http\Controllers\ComboController@add')->name('combo.create');
Route::post('/combo/save', 'App\Http\Controllers\ComboController@save')->name('combo.save');

Route::get('/combo/moderate', 'App\Http\Controllers\ComboController@moderate')->name(
    'combo.moderate'
);
Route::post('/combo/approve', 'App\Http\Controllers\ComboController@approve')->name(
    'combo.approve'
);
Route::post('/combo/deny', 'App\Http\Controllers\ComboController@deny')->name('combo.deny');
