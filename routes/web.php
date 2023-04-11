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
/*
Route::get('/', function () {
    return view('selamatdatang');
});*/


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', function(){
    return view('selamatdatang');
})->name('home');

Route::group(['prefix' => 'customers'], function(){
    Route::get('/', 'CustomerController@index')->name('customers.index');
    Route::get('create', 'CustomerController@create')->name('customers.create');
    Route::post('store', 'CustomerController@store')->name('customers.store');
    Route::get('{id}/edit', 'CustomerController@edit')->name('customers.edit');
    Route::post('update', 'CustomerController@update')->name('customers.update');
    Route::get('{id}/delete', 'CustomerController@destroy')->name('customers.destroy');
});

Route::group(['prefix' => 'orders'], function(){
    Route::get('/', 'OrderController@index')->name('orders.index');
    Route::get('create', 'OrderController@create')->name('orders.create');
    Route::post('store', 'OrderController@store')->name('orders.store');
    Route::get('{id}/edit', 'OrderController@edit')->name('orders.edit');
    Route::post('update', 'OrderController@update')->name('orders.update');
    Route::get('{id}/delete', 'OrderController@destroy')->name('orders.destroy');
});

Route::group(['prefix' => 'orderitems'], function(){
    Route::get('/', 'OrderController@index')->name('orderitems.index');
    Route::get('create', 'OrderController@create')->name('orderitems.create');
    Route::post('store', 'OrderController@store')->name('orderitems.store');
    Route::get('{id}/edit', 'OrderController@edit')->name('orderitems.edit');
    Route::post('update', 'OrderController@update')->name('orderitems.update');
    Route::get('{id}/delete', 'OrderController@destroy')->name('orderitems.destroy');
});

Route::group(['prefix' => 'items'], function(){
    Route::get('/', 'ItemController@index')->name('items.index');
    Route::get('create', 'ItemController@create')->name('items.create');
    Route::post('store', 'ItemController@store')->name('items.store');
    Route::get('{id}/edit', 'ItemController@edit')->name('items.edit');
    Route::post('update', 'ItemController@update')->name('items.update');
    Route::get('{id}/delete', 'ItemController@destroy')->name('items.destroy');

});

Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');


/*
Route::resource('/customers', \App\Http\Controllers\CustomerController::class);
Route::resource('/orders', \App\Http\Controllers\OrderController::class);
Route::resource('/items', \App\Http\Controllers\ItemController::class);*/


/*Route::middleware(['auth', 'user-access:Staff'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

Route::middleware(['auth', 'user-access:Admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/