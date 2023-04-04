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
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\ExportController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SizeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::middleware('auth:admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
    Route::get('/change-password', [PasswordController::class, 'showChangePassword'])->name('changePassword');
    Route::post('/change-password', [PasswordController::class, 'changePassword'])->name('changePassword');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
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
    Route::resource('orders', OrderController::class)->only(['index', 'show', 'destroy']);
    Route::resource('contacts', ContactController::class)->only(['index', 'show', 'destroy']);
    Route::resource('customers', CustomerController::class)->only(['index', 'show', 'destroy']);
    Route::group(['prefix' => 'export', 'as' => 'export.'], function () {
        Route::get('customers', [ExportController::class, 'exportCustomer'])->name('customers');
    });
    Route::group(['prefix' => 'products', 'as' => 'products.'], function () {
        Route::post('/uploadFile', [ProductController::class, 'uploadFile'])->name('uploadFile');
        Route::put('/{product}/toggle-status', [ProductController::class, 'toggle'])->name('toggle');
        Route::put('/{product}/toggle', [ProductController::class, 'toggle'])->name('toggleStatus');
    });
});
