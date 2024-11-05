<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TentangkamiController;
use Illuminate\Support\Facades\Route;


Route::get('/', [IndexController::class, 'show'])->name("index");
Route::get('/tentang', [TentangkamiController::class, 'show'])->name("tentang");
Route::get('/event', [EventController::class, 'show'])->name("event");
Route::get('/katalog', [KatalogController::class, 'show'])->name("katalog");
Route::get('/kontak', [KontakController::class, 'show'])->name("kontak");
Route::get('/article/{id_event}', [ArticleController::class, 'show'])->name("article");
Route::get('/produk/{id_produk}', [ProdukController::class, 'show'])->name("produk");




// Route untuk login
Route::middleware(['authentication'])->group(function(){
    Route::get('/login', [LoginController::class, 'show'])->name('login.show');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.process');
});
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// Route admin yang membutuhkan autentikasi
Route::middleware(['authorization'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');

    // Kontak
    Route::post('/kontak', [AdminController::class, 'store'])->name('kontak.store');
    Route::put('kontak/{id_kontak}', [AdminController::class, 'update'])->name('kontak.update'); 
    Route::delete('/kontak/{id_kontak}', [AdminController::class, 'destroy'])->name('kontak.destroy');

    // Testimoni
    Route::post('/testimoni', [AdminController::class, 'tambahTestimoni'])->name('testi.store');
    Route::put('testimoni/{id_testimoni}', [AdminController::class, 'updateTestimoni'])->name('testi.update');
    Route::delete('/testimoni/{id_testimoni}', [AdminController::class, 'hapusTestimoni'])->name('testi.destroy');

    // Produk
    Route::post('/produk', [AdminController::class, 'storeProduct'])->name('produk.store');
    Route::put('/produk/{id_produk}', [AdminController::class, 'updateProduct'])->name('produk.update');
    Route::delete('/produk/{id_produk}', [AdminController::class, 'destroyProduct'])->name('produk.destroy');

    // Event
    Route::post('/event', [AdminController::class, 'tambahEvent'])->name('event.store');
    Route::put('/event/{id_event}', [AdminController::class, 'updateEvent'])->name('event.update');
    Route::delete('/event/{id_event}', [AdminController::class, 'hapusEvent'])->name('event.destroy');
});








