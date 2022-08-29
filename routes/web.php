<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\viewOnlyBladesController;

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
    return view('pages.landing');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/restaurant-list', [viewOnlyBladesController::class, 'restaurant_list'])->name('restaurant_list');

Route::get('/item_order_page/{restaurant_id}', [viewOnlyBladesController::class, 'item_order_page'])->name('item_order_page');
Route::get('/order_cart', [viewOnlyBladesController::class, 'order_cart'])->name('order_cart');







// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
