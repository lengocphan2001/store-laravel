<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PasswordController;
use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\DiscountController;
use App\Http\Controllers\Admin\CustomerController;
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


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {
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

        Route::group(['prefix' => 'banners', 'as' => 'banners.'], function () {
            Route::resource('/', BannerController::class);
            Route::get('/', [BannerController::class, 'index'])->name('list');
            Route::get('/create', [BannerController::class, 'create'])->name('create');
            Route::post('/store', [BannerController::class, 'store'])->name('store');
            Route::get('/{banner}/edit', [BannerController::class, 'edit'])->name('edit');
            Route::put('/{banner}/update', [BannerController::class, 'update'])->name('update');
            Route::delete('/{banner}/delete', [BannerController::class, 'delete'])->name('delete');
        });

        Route::group(['prefix' => 'categories', 'as' => 'categories.'], function () {
            Route::get('/', [CategoryController::class, 'index'])->name('list');
            Route::get('/create', [CategoryController::class, 'create'])->name('create');
            Route::post('/store', [CategoryController::class, 'store'])->name('store');
            Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('edit');
            Route::put('/{category}/update', [CategoryController::class, 'update'])->name('update');
            Route::delete('{category}/delete', [CategoryController::class, 'delete'])->name('delete');
        });

        Route::group(['prefix' => 'suppliers', 'as' => 'suppliers.'], function () {
            Route::get('/', [SupplierController::class, 'index'])->name('list');
            Route::get('/create', [SupplierController::class, 'create'])->name('create');
            Route::post('/store', [SupplierController::class, 'store'])->name('store');
            Route::get('/{supplier}/edit', [SupplierController::class, 'edit'])->name('edit');
            Route::put('/{supplier}/update', [SupplierController::class, 'update'])->name('update');
            Route::delete('{supplier}/delete', [SupplierController::class, 'delete'])->name('delete');
        });

        Route::group(['prefix' => 'colors', 'as' => 'colors.'], function () {
            Route::get('/', [ColorController::class, 'index'])->name('list');
            Route::get('/create', [ColorController::class, 'create'])->name('create');
            Route::post('/store', [ColorController::class, 'store'])->name('store');
            Route::get('/{color}/edit', [ColorController::class, 'edit'])->name('edit');
            Route::put('/{color}/update', [ColorController::class, 'update'])->name('update');
            Route::delete('{color}/delete', [ColorController::class, 'delete'])->name('delete');
        });

        Route::group(['prefix' => 'products', 'as' => 'products.'], function () {
            Route::post('/uploadFile', [ProductController::class, 'uploadFile'])->name('uploadFile');
            Route::get('/', [ProductController::class, 'index'])->name('list');
            Route::get('/create', [ProductController::class, 'create'])->name('create');
            Route::post('/store', [PostController::class, 'store'])->name('store');
            Route::get('/{product:slug}/edit', [ProductController::class, 'edit'])->name('edit');
            Route::put('/{product}/update', [ProductController::class, 'update'])->name('update');
            Route::delete('/{product}/delete', [ProductController::class, 'delete'])->name('delete');
            Route::put('/{product}/toggle-status', [ProductController::class, 'toggle'])->name('toggle');
            Route::put('/{product}/toggle', [ProductController::class, 'toggle'])->name('toggleStatus');
        });

        Route::group(['prefix' => 'orders', 'as' => 'orders.'], function () {
            Route::get('/', [OrderController::class, 'index'])->name('list');
            Route::get('{order}/show', [OrderController::class, 'show'])->name('show');
            Route::delete('{order}/delete', [OrderController::class, 'delete'])->name('delete');
        });
        Route::group(['prefix' => 'discounts', 'as' => 'discounts.'], function () {
            Route::get('/', [DiscountController::class, 'index'])->name('list');
            Route::get('/create', [DiscountController::class, 'create'])->name('create');
            Route::post('/store', [DiscountController::class, 'store'])->name('store');
            Route::get('/{discount}/edit', [DiscountController::class, 'edit'])->name('edit');
            Route::put('/{discount}/update', [DiscountController::class, 'update'])->name('update');
            Route::delete('{discount}/delete', [DiscountController::class, 'delete'])->name('delete');
        });

        Route::group(['prefix' => 'contacts', 'as' => 'contacts.'], function () {
            Route::get('/', [ColorController::class, 'index'])->name('list');
            Route::get('{contact}/show', [ColorController::class, 'show'])->name('show');
            Route::delete('{contact}/delete', [ColorController::class, 'delete'])->name('delete');
        });
        Route::group(['prefix' => 'customers', 'as' => 'customers.'], function () {
            Route::get('/', [CustomerController::class, 'index'])->name('list');
            Route::get('{contact}/show', [CustomerController::class, 'show'])->name('show');
            Route::delete('{contact}/delete', [CustomerController::class, 'delete'])->name('delete');
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
