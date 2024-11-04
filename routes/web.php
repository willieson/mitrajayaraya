<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);


Route::middleware(['guest'])->group(function () {
    Route::get('/login', function () {
        return view('login', [
            "title" => "login"
        ]);
    });
    Route::get('/register', function () {
        return view('register', ['title' => 'Register']);
    });
});


Route::get('/', [HomeController::class, 'index'])->name('home');


Route::middleware(['auth.jwt'])->group(function () {
    Route::get('/admin', [AuthController::class, 'index']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('/verify-email', [AuthController::class, 'verifyEmail']);
    Route::post('/send-verification-code', [AuthController::class, 'sendVerificationCode']);
    Route::post('/verify-code', [AuthController::class, 'verifyCode']);
    Route::get('/history-order', [HistoryController::class, 'index']);
    Route::resource('products', ProductController::class);
    Route::delete('products/images/{id}', [ProductController::class, 'destroyImage'])->name('products.images.destroy');
});
