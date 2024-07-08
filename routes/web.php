<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KabKotaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\FaskesController;
use App\Http\Controllers\JenisFaskesController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route Dashboard
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Route Provinsi
    Route::get('/admin/provinsi', [ProvinsiController::class, 'show'])->name('provinsi')->middleware('admin');
    Route::get('admin/provinsi/create', [ProvinsiController::class, 'create'])->name('provinsi.create')->middleware('admin');
    Route::post('/admin/provinsi/create', [ProvinsiController::class, 'store'])->name('provinsi.store')->middleware('admin');
    Route::get('admin/provinsi/edit/{id}', [ProvinsiController::class, 'edit'])->name('provinsi.edit')->middleware('admin');
    Route::put('admin/provinsi/update/{id}', [ProvinsiController::class, 'update'])->name('provinsi.update')->middleware('admin');
    Route::delete('admin/provinsi/delete/{id}', [ProvinsiController::class, 'destroy'])->name('provinsi.destroy')->middleware('admin');

    // Route KabKota
    Route::get('/admin/kabkota', [KabKotaController::class, 'show'])->name('kabkota')->middleware('admin');
    Route::get('admin/kabkota/create', [KabKotaController::class, 'create'])->name('kabkota.create')->middleware('admin');
    Route::post('/admin/kabkota/create', [KabKotaController::class, 'store'])->name('kabkota.store')->middleware('admin');
    Route::get('admin/kabkota/edit/{id}', [KabKotaController::class, 'edit'])->name('kabkota.edit')->middleware('admin');
    Route::put('admin/kabkota/update/{id}', [KabKotaController::class, 'update'])->name('kabkota.update')->middleware('admin');
    Route::delete('admin/kabkota/delete/{id}', [KabKotaController::class, 'destroy'])->name('kabkota.destroy')->middleware('admin');

    // Route jenis faskes
    Route::get('/admin/jenis', [JenisFaskesController::class, 'show'])->name('jenis');
    Route::get('admin/jenis/create', [JenisFaskesController::class, 'create'])->name('jenis.create')->middleware('admin');
    Route::post('/admin/jenis/create', [JenisFaskesController::class, 'store'])->name('jenis.store')->middleware('admin');
    Route::delete('admin/jenis/delete/{id}', [JenisFaskesController::class, 'destroy'])->name('jenis.destroy')->middleware('admin');

    // Route Kategori faskes
    Route::get('/admin/kategori', [KategoriController::class, 'show'])->name('kategori');
    Route::get('admin/kategori/create', [KategoriController::class, 'create'])->name('kategori.create')->middleware('admin');
    Route::post('/admin/kategori/create', [KategoriController::class, 'store'])->name('kategori.store')->middleware('admin');
    Route::delete('admin/kategori/delete/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy')->middleware('admin');

    // Route faskes
    Route::get('/admin/faskes', [FaskesController::class, 'show'])->name('faskes');
    Route::get('admin/faskes/create', [FaskesController::class, 'create'])->name('faskes.create')->middleware('admin');
    Route::post('/admin/faskes/create', [FaskesController::class, 'store'])->name('faskes.store')->middleware('admin');
    Route::get('admin/faskes/edit/{id}', [FaskesController::class, 'edit'])->name('faskes.edit')->middleware('admin');
    Route::put('admin/faskes/update/{id}', [FaskesController::class, 'update'])->name('faskes.update')->middleware('admin');
    Route::delete('admin/faskes/delete/{id}', [FaskesController::class, 'destroy'])->name('faskes.destroy')->middleware('admin');
});

require __DIR__.'/auth.php';
