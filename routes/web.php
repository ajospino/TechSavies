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

Route::get("/", [App\Http\Controllers\HomeController::class, "index"])->name(
    "home.index"
);

Auth::routes();

Route::get("/home", [
    App\Http\Controllers\HomeController::class,
    "index",
])->name("home");

Route::get("/home/user", "App\Http\Controllers\HomeController@home")->name(
    "home.indexUser"
);

Route::get(
    "/admin/show/{id}",
    "App\Http\Controllers\UserController@show"
)->name("admin.show");

Route::get("/admin/list", "App\Http\Controllers\UserController@list")->name(
    "admin.list"
);

Route::get(
    "/admin/delete/{id}",
    "App\Http\Controllers\UserController@delete"
)->name("admin.delete");
