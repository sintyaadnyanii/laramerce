<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewTemplateController;
use App\Models\Brand;
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

Route::get('/token', function () {
    // return auth()->user()->wishl
});
Route::get('/', function () {
    return view('frontpage.main.main', ['title' => 'Homepage | Urban Adventure']);
});

Route::controller(GeneralController::class)->group(function () {
    Route::get('/', 'main')->name('main');
    Route::get('/cart', 'cart')->name('cart');
    // Route::get('/category', 'category')->name('category');
    Route::get('/category/{category:name}', 'category')->name('category');
    Route::get('/product/{product:product_code}', 'product_detail')->name('product-detail');
    Route::match(['GET', 'POST'], '/checkout', 'checkout')->name('checkout');
    Route::post('/execute-order', 'execute_order')->name('execute_order');
    Route::get('/blog-detail', 'blog_detail')->name('blog-detail');
    Route::get('/blog-page', 'blog')->name('blog');
    Route::get('/order-detail', 'order_detail')->name('order-detail');
    Route::get('/order-history', 'order_history')->name('order-history');
    Route::get('/my-account', 'my_account')->name('my-account');
    Route::get('/wishlist', 'wishlist')->name('wishlist');
});

Route::get('/test', function () {
    return Product::popular();
});

Route::controller(ViewTemplateController::class)->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.admin.main-dashboard', ['title' => 'Dashboard | Urban Adventure']);
    })->name('dashboard')->middleware('auth');
});

Route::controller(CategoryController::class)->group(function () {
    Route::get('/dashboard/categories', 'allCategory')->name('manage_category.all')->middleware('can:isAdmin');
    Route::get('/dashboard/category/create', 'createCategory')->name('manage_category.create')->middleware('can:isAdmin');
    Route::post('/dashboard/category/create', 'storeCategory')->name('manage_category.store')->middleware('can:isAdmin');
    Route::get('/dashboard/category/{category:id}', 'detailCategory')->name('manage_category.detail')->middleware('can:isAdmin');
    Route::get('/dashboard/category/{category:id}/update', 'updateCategory')->name('manage_category.update')->middleware('can:isAdmin');
    Route::patch('/dashboard/category/{category:id}', 'patchCategory')->name('manage_category.patch')->middleware('can:isAdmin');
    Route::delete('/dashboard/category/{category:id}/delete', 'deleteCategory')->name('manage_category.delete')->middleware('can:isAdmin');
});
Route::controller(OrderController::class)->group(function () {
    Route::get('/dashboard/orders', 'allOrder')->name('manage_order.all');
    Route::get('/dashboard/order/create', 'createOrder')->name('manage_order.create');
});
Route::controller(ProductController::class)->group(function () {
    Route::get('/dashboard/products', 'allProduct')->name('manage_product.all')->middleware('can:isAdmin');
    Route::get('/dashboard/product/create', 'createProduct')->name('manage_product.create')->middleware('can:isAdmin');
    Route::post('/dashboard/product/create', 'storeProduct')->name('manage_product.store')->middleware('can:isAdmin');
    Route::get('/dashboard/product/{product:product_code}', 'detailProduct')->name('manage_product.detail')->middleware('can:isAdmin');
    Route::get('/dashboard/product/{product:product_code}/update', 'updateProduct')->name('manage_product.update')->middleware('can:isAdmin');
    Route::patch('/dashboard/product/{product:product_code}', 'patchProduct')->name('manage_product.patch')->middleware('can:isAdmin');
    Route::delete('/dashboard/product/{product:product_code}', 'deleteProduct')->name('manage_product.delete')->middleware('can:isAdmin');
});
Route::controller(UserController::class)->group(function () {
    Route::get('/dashboard/users', 'allUser')->name('manage_user.all')->middleware('can:isAdmin');
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'attemptLogin')->name('attempt_login');
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'attemptRegister')->name('attempt_register');
    Route::get('/logout', 'logout')->name('logout');
    Route::get('/dashboard/profile/detail/{user:email}', 'detailProfile')->name('profile.detail')->middleware('auth');
    Route::get('/dashboard/profile/update/{user:email}', 'updateProfile')->name('profile.update')->middleware('auth');
    Route::patch('/dashboard/profile/{user:email}', 'patchProfile')->name('profile.patch')->middleware('auth');
    Route::delete('/dashboard/user/{user:email}', 'deleteUser')->name('manage_user.delete')->middleware('can:isAdmin');
});
Route::controller(BrandController::class)->group(function () {
    Route::get('/dashboard/brand', 'allBrand')->name('manage_brand.all')->middleware(['can:isAdmin', 'auth']);
    Route::get('/dashboard/brand/create', 'createBrand')->name('manage_brand.create')->middleware(['can:isAdmin', 'auth']);
    Route::post('/dashboard/brand/create', 'storebrand')->name('manage_brand.store')->middleware(['can:isAdmin', 'auth']);
    Route::get('/dashboard/brand/{brand:brand_code}', 'detailBrand')->name('manage_brand.detail')->middleware(['can:isAdmin', 'auth']);
    Route::get('/dashboard/brand/{brand:brand_code}/update', 'updateBrand')->name('manage_brand.update')->middleware(['can:isAdmin', 'auth']);
    Route::patch('/dashboard/brand/{brand:brand_code}/update', 'patchBrand')->name('manage_brand.patch')->middleware(['can:isAdmin', 'auth']);
    Route::delete('/dashboard/brand/{brand:brand_code}/delete', 'deleteBrand')->name('manage_brand.delete')->middleware(['can:isAdmin', 'auth']);
});
Route::controller(CartController::class)->group(function () {
    Route::get('/dashboard/carts', 'allCart')->name('manage_cart.all')->middleware('can:isUser');
});