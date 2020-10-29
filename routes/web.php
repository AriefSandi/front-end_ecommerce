<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\InputController;
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



Route::get('/', [Controller::class, 'v_dashboard']);
Route::get('beras', [Controller::class, 'v_beras']);
Route::get('shop-detail1', [Controller::class, 'v_detail1']);
Route::get('shop-detail2', [Controller::class, 'v_detail2']);
Route::get('cart', [Controller::class, 'v_cart']);
Route::post('cart1', [Controller::class, 'v_cart1']);


Route::get('checkout1', [Controller::class, 'v_checkout1']);
Route::get('checkout2', [Controller::class, 'v_checkout2']);
Route::get('checkout3', [Controller::class, 'v_checkout3']);
Route::get('checkout4', [Controller::class, 'v_checkout4']);


Route::get('customer-order', [Controller::class, 'v_co']);
Route::get('customer-wishlist', [Controller::class, 'v_cw']);
Route::get('customer-account', [Controller::class, 'v_ca']);

