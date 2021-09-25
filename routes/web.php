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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");

Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@create')->name("register");
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login')->name("login");

Route::get('/product/create', 'App\Http\Controllers\ProductController@addProduct')->name("product.create");
Route::post('/product/save', 'App\Http\Controllers\ProductController@save')->name("product.save");

Route::get('/combo/create', 'App\Http\Controllers\ComboController@create')->name("combo.create");
Route::post('/combo/save', 'App\Http\Controllers\ComboController@save')->name("combo.save");
 