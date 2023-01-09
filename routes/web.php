<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewTemplateController;
use App\Models\Product;
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
Route::get('/test', function () {
    return Product::popular();
});

Route::controller(ViewTemplateController::class)->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.admin.main-dashboard', ['title' => 'Dashboard | Urban Adventure']);
    })->name('dashboard');
});

Route::controller(CategoryController::class)->group(function () {
    Route::get('/dashboard/categories', 'allCategory')->name('manage_category.all');
    Route::get('/dashboard/category/create', 'createCategory')->name('manage_category.create');
    Route::post('/dashboard/category/create', 'storeCategory')->name('manage_category.store');
    Route::get('/dashboard/category/{category:id}', 'detailCategory')->name('manage_category.detail');
    Route::get('/dashboard/category/{category:id}/update', 'updateCategory')->name('manage_category.update');
    Route::patch('/dashboard/category/{category:id}', 'patchCategory')->name('manage_category.patch');
    Route::delete('/dashboard/category/{category:id}/delete', 'deleteCategory')->name('manage_category.delete');
});
Route::controller(OrderController::class)->group(function () {
    Route::get('/dashboard/orders', 'allOrder')->name('manage_order.all');
    Route::get('/dashboard/order/create', 'createOrder')->name('manage_order.create');
});
Route::controller(ProductController::class)->group(function () {
    Route::get('/dashboard/products', 'allProduct')->name('manage_product.all');
    Route::get('/dashboard/product/create', 'createProduct')->name('manage_product.create');
    Route::post('/dashboard/product/create', 'storeProduct')->name('manage_product.store');
    Route::get('/dashboard/product/{product}', 'detailProduct')->name('manage_product.detail');
    Route::get('/dashboard/product/{product}/update', 'updateProduct')->name('manage_product.update');
    Route::patch('/dashboard/product/{product}', 'patchProduct')->name('manage_product.patch');
    Route::delete('/dashboard/product/{product}', 'deleteProduct')->name('manage_product.delete');
});
Route::controller(UserController::class)->group(function () {
    Route::get('/dashboard/users', 'allUser')->name('manage_user.all')->middleware('can:isAdmin');
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'attemptLogin')->name('attempt_login');
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'attemptRegister')->name('attempt_register');
    Route::get('/logout', 'logout')->name('logout');
    Route::get('/dashboard/user/{user}', 'detailUser')->name('manage_user.detail');
    Route::get('/dashboard/user/{user}/update', 'updateUser')->name('manage_user.update');
    Route::patch('/dashboard/user/{user}', 'patchUser')->name('manage_user.patch');
    Route::delete('/dashboard/user/{user}', 'deleteUser')->name('manage_user.delete');
});
Route::controller(CartController::class)->group(function () {
    Route::get('/dashboard/carts', 'allCart')->name('manage_cart.all');
});