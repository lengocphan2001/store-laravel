<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PasswordController;
use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\DiscountController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\User\AuthController as UserAuthController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\LikeProductController;
use App\Http\Controllers\User\OrderController as UserOrderController;
use App\Http\Controllers\User\PasswordController as UserPasswordController;
use App\Http\Controllers\User\PaymentController;
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


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/login', [AuthController::class, 'formLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'checkLogin'])->name('checkLogin');
    Route::group([], function () {
        Route::get('/change-password', [PasswordController::class, 'formChangePassword'])->name('formChangePassword');
        Route::post('/change-password', [PasswordController::class, 'changePassword'])->name('changePassword');
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
        Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
            Route::get('/', [UserController::class, 'index'])->name('list');
            Route::delete('/{user}/delete', [UserController::class, 'delete'])->name('delete');
        });

        
        Route::resource('banners', BannerController::class);
        Route::resource('categories', CategoryController::class);
        Route::resource('suppliers', SupplierController::class);
        Route::resource('colors', ColorController::class);
        Route::resource('sizes', SizeController::class);
        Route::resource('products', ProductController::class);
        Route::resource('orders', OrderController::class)->only(['index', 'show','destroy']);
        Route::resource('contacts', ContactController::class)->only(['index', 'show','destroy']);
        Route::resource('users', UserController::class)->only(['index', 'show','destroy']);
        
        Route::group(['prefix' => 'products', 'as' => 'products.'], function () {
            Route::post('/uploadFile', [ProductController::class, 'uploadFile'])->name('uploadFile');
            Route::put('/{product}/toggle-status', [ProductController::class, 'toggle'])->name('toggle');
            Route::put('/{product}/toggle', [ProductController::class, 'toggle'])->name('toggleStatus');
        });
    });
});
// user
Route::group(['as' => 'user.', 'namespace' => 'User'], function () {
    Route::get('/login', [UserAuthController::class, 'formLogin'])->name('login');
    Route::get('/register', [UserPasswordController::class, 'formRegister'])->name('formRegister');
    Route::post('/register', [UserPasswordController::class, 'register'])->name('register');
    Route::get('/forgotpassword', [UserPasswordController::class, 'formForgotpassword'])->name('formForgotpassword');
    Route::post('/forgotpassword', [UserPasswordController::class, 'forgotpassword'])->name('forgotpassword');
    Route::get('/categories/{category:slug}', [HomeController::class, 'category'])->name('categories.index');
    Route::get('/products', [HomeController::class, 'postList'])->name('products.index');
    Route::get('/product-detail/{product:slug}', [HomeController::class, 'detail'])->name('product.detail');
    Route::get('/products/search', [HomeController::class, 'searchProducts'])->name('searchProducts');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/change-password', [UserPasswordController::class, 'formChangePassword'])->name('formChangePassword');
        Route::post('/change-password', [UserPasswordController::class, 'changePassword'])->name('changePassword');
        Route::post('/logout', [UserAuthController::class, 'logout'])->name('logout');
        Route::get('/order', [UserOrderController::class, 'index'])->name('oderProduct');
        Route::get('/cart', [CartController::class, 'index'])->name('cartProduct');
        Route::get('/payment', [PaymentController::class, 'payWithStripe'])->name('cartProduct');
        Route::get('/like-products', [LikeProductController::class, 'index'])->name('likeProduct');
    });
});
