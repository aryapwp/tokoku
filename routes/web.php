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

Route::get('/', function () {
    return view('selamatdatang');
});

Route::resource('/customers', \App\Http\Controllers\CustomerController::class);
Route::resource('/orders', \App\Http\Controllers\OrderController::class);
Route::resource('/items', \App\Http\Controllers\ItemController::class);

Auth::routes();

Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::middleware(['auth', 'user-access:Staff'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

Route::middleware(['auth', 'user-access:Admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
