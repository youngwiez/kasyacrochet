<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('index');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/show', function () {
    return view('show');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/products', function () {
    return view('products');
});

Route::resource('product', BarangController::class);
Route::delete('product/{product}', [BarangController::class, 'destroy'])->name('product.destroy');

Route::get('login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class,'authenticate']);

Route::get('logout', [LoginController::class,'logout']);
Route::post('logout', [LoginController::class,'logout']);

Route::post('register', [RegisterController::class,'store']);
Route::get('register', [RegisterController::class,'create']);