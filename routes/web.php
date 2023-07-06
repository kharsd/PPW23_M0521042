<?php

use App\Http\Controllers\MahasiswaController;
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

Route::get('/', function () {
    return view('index');
});

Route::controller(MahasiswaController::class)->prefix('mahasiswa')->group(function(){
    Route::get('', 'index')->name('mahasiswa');
    Route::get('show/{id}', 'show')->name('mahasiswa.show');
    Route::get('tambah', 'tambah')->name('mahasiswa.tambah');
    Route::post('tambah', 'simpan')->name('mahasiswa.tambah.simpan');
});
