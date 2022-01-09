<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SatwaController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\BookingController;
use App\Http\Middleware\CekLevel;


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


Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/satwa', [SatwaController::class, 'index'])->name('satwa');
Route::get('/donation', [DonationController::class, 'index'])->name('donation');
Route::post('/store-donation', [DonationController::class, 'store'])->name('store.donation');
Route::get('/ticket-booking', [BookingController::class, 'index'])->name('ticket-booking');
Route::post('/store-booking', [BookingController::class, 'store'])->name('store.booking');

Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
    Route::prefix('admin')->group(function () {
        Route::prefix('news')->group(function () {
            Route::get('/', [NewsController::class, 'index'])->name('admin.news');
            Route::post('/store', [NewsController::class, 'store'])->name('admin.news.store');
            Route::post('/{id}/update', [NewsController::class, 'update'])->name('admin.news.update');
            Route::get('/{id}/destroy', [NewsController::class, 'destroy'])->name('admin.news.destroy');
        });
        Route::prefix('donation')->group(function () {
            Route::get('/', [DonationController::class, 'adminIndex'])->name('admin.donation');
            Route::post('/{id}/update', [DonationController::class, 'update'])->name('admin.donation.update');
        });
        Route::prefix('booking')->group(function () {
            Route::get('/', [BookingController::class, 'adminIndex'])->name('admin.booking');
            Route::post('/{id}/update', [BookingController::class, 'update'])->name('admin.booking.update');
        });
    });
});

Route::group(['middleware' => ['auth', 'ceklevel:user']], function () {
    Route::prefix('user')->group(function () {
        Route::get('/donation-history', [DonationController::class, 'userIndex'])->name('user.donation-history');
        Route::get('/booking-history', [BookingController::class, 'userIndex'])->name('user.booking-history');
    });
});
