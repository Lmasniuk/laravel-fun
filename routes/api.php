<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/orders', [OrderController::class, 'getAllOrders']);

Route::get('/orders/{id}', [OrderController::class, 'getOrderById']);

Route::post('/orders', [OrderController::class, 'createOrder']);

Route::put('/orders/{id}', [OrderController::class, 'updateOrderById']);

Route::delete('/orders/{id}', [OrderController::class, 'deleteOrder']);