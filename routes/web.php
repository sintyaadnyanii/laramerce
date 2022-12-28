<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewTemplateController;
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
    return view('layouts.front-layout', ['title' => 'Homepage | Urban Adventure']);
});

Route::controller(ViewTemplateController::class)->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.admin.main-dashboard', ['title' => 'Dashboard | Urban Adventure']);
    });
});

Route::controller(CategoryController::class)->group(function () {
    Route::get('/dashboard/categoriy', 'allCategory')->name('manage_category.all');
    Route::get('/dashboard/category/create', 'createCategory')->name('manage_category.create');
    Route::post('/dashboard/category/create', 'storeCategory')->name('manage_category.store');
    Route::get('/dashboard/category/{category:id}', 'detailCategory')->name('manage_category.detail');
    Route::get('/dashboard/category/{category:id}/update', 'updateCategory')->name('manage_category.update');
    Route::patch('/dashboard/category/{category:id}', 'patchCategory')->name('manage_category.patch');
    Route::delete('/dashboard/category/{category:id}/delete', 'deleteCategory')->name('manage_category.delete');
});
Route::controller(OrderController::class)->group(function () {
    Route::get('/dashboard/orders', 'allOrder')->name('manage_order.all');
});
Route::controller(ProductController::class)->group(function () {
    Route::get('/dashboard/products', 'allProduct')->name('manage_product.all');
});
Route::controller(UserController::class)->group(function () {
    Route::get('/dashboard/users', 'allUser')->name('manage_user.all');
});
Route::controller(CartController::class)->group(function () {
    Route::get('/dashboard/carts', 'allCart')->name('manage_cart.all');
});