<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\ApiOngkirController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::controller(ApiOngkirController::class)->group(function () {
    Route::get('/province', 'getProvince');
    Route::get('/city', 'getCity');
    Route::post('/cost', 'getCost');
});

Route::controller(AjaxController::class)->group(function () {
    Route::get('/get-product/{product_code}', 'getProductData');
    Route::post('/add-to-cart', 'addToCart');
});
