<?php


use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\LikeProductController;
use App\Http\Controllers\User\OrderController;
use App\Http\Controllers\User\PasswordController;
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



Route::group(['as' => 'user.', 'namespace' => 'User'], function () {
    Route::get('/login', [AuthController::class, 'formLogin'])->name('login');
    Route::get('/register', [AuthController::class, 'formRegister'])->name('formRegister');
    Route::post('/register', [PasswordController::class, 'register'])->name('register');
    Route::get('/forgotpassword', [PasswordController::class, 'formForgotpassword'])->name('formForgotpassword');
    Route::post('/forgotpassword', [PasswordController::class, 'forgotpassword'])->name('forgotpassword');
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/categories/{category:slug}', [HomeController::class, 'category'])->name('categories.index');
    Route::get('/products', [HomeController::class, 'postList'])->name('products.index');
    Route::get('/product-detail/{product:slug}', [HomeController::class, 'detail'])->name('product.detail');
    Route::get('/products/search', [HomeController::class, 'searchProducts'])->name('searchProducts');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/change-password', [PasswordController::class, 'formChangePassword'])->name('formChangePassword');
        Route::post('/change-password', [PasswordController::class, 'changePassword'])->name('changePassword');
        Route::get('/dashboard', [AuthController::class, 'detail'])->name('detail');
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/order/{id}', [OrderController::class, 'detail'])->name('order.detail');
        Route::get('/cart', [CartController::class, 'index'])->name('cartProduct');
        Route::get('/payment', [PaymentController::class, 'payWithStripe'])->name('cartProduct');
        Route::get('/like-products', [LikeProductController::class, 'index'])->name('likeProduct');
    });
});
