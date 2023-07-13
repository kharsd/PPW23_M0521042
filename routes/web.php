<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('/welcome');
// });

Route::get('/dashboard', [UserController::class, 'index'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::controller(ProductController::class)->prefix('product')->middleware('auth', 'admin')->group(function(){
    Route::get('', 'index')->name('product');  
    Route::get('show/{id}', 'show')->name('product.show');
    Route::get('tambah', 'tambah')->name('product.tambah');
    Route::post('tambah', 'simpan')->name('product.tambah.simpan');
    Route::get('edit/{id}', 'edit')->name('product.edit');
    Route::post('edit/{id}', 'update')->name('product.tambah.update');
    Route::get('hapus/{id}', 'hapus')->name('product.hapus');
});