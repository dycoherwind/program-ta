<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminKategoriController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/paket/{id}')->name('paket.detail');

Auth::routes();

// route untuk admin
Route::prefix('admin')->middleware('admin')->group(function() {
    Route::get('/', [AdminHomeController::class, 'index'])->name('admin.home');

    Route::prefix('kategori')->group(function() {
        Route::get('/', [AdminKategoriController::class, 'index'])->name('admin.kategori');
        Route::get('/tambah', [AdminKategoriController::class, 'tambah'])->name('admin.kategori.tambah');
        Route::post('/simpan', [AdminKategoriController::class, 'simpan'])->name('admin.kategori.simpan');
        Route::get('/ubah/{id}', [AdminKategoriController::class, 'ubah'])->name('admin.kategori.ubah');
        Route::post('/edit', [AdminKategoriController::class, 'edit'])->name('admin.kategori.edit');
        Route::get('/hapus/{id}', [AdminKategoriController::class, 'hapus'])->name('admin.kategori.hapus');
    });

    Route::prefix('produk')->group(function() {
        Route::get('/');
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
