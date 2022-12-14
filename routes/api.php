<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\api\ApiController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    

    return $request->user();
});

Route::post('/item_insert', [ApiController::class, 'item_insert'])->name('item_insert');
Route::post('/restaurant_add', [ApiController::class, 'restaurant_add'])->name('restaurant_add');
Route::post('/catagory_add', [ApiController::class, 'catagory_add'])->name('catagory_add');
Route::post('/user_info_add', [ApiController::class, 'user_info_add'])->name('user_info_add');
Route::post('/order_insert', [ApiController::class, 'order_insert'])->name('order_insert');
Route::post('/addOns_insert', [ApiController::class, 'addOns_insert'])->name('addOns_insert');
Route::post('/confirm_order', [ApiController::class, 'confirm_order'])->name('confirm_order');












