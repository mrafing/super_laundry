<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;

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
Route::get('/', function () {
    return view('home', [
        "title" => 'Home',        
        "active" => 'home'                          
    ]);
});

Route::get('/products', [ProductController::class, 'index']);

Route::post('/cart', [ChartController::class, 'saveChart'])->middleware('auth');
Route::get('/cart/{id_user:id_user}', [ChartController::class, 'index']);
Route::delete('/cart/hapus/{chart}', [ChartController::class, 'delete']);

Route::get('/checkout/{id_user:id_user}', [CheckoutController::class, 'index'])->middleware('auth');
Route::post('/checkout/{id_user:id_user}', [CheckoutController::class, 'saveCheckout']);

Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', function () {
    return view('register');
})->middleware('guest')->name('register');

Route::post('/register', [RegisterController::class, 'store']);
