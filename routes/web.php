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

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/faskes1', function () {
    return view('faskes1');
});

Route::get('/faskes2', function () {
    return view('faskes2');
});

Route::get('/faskes3', function () {
    return view('faskes3');
});

Route::get('/masuk', function () {
    return view('masuk');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('faskes/form', [
    FaskesController::class, 'form'
]);

Route::post('faskes/tambah', [
    FaskesController::class, 'tambah'
]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route Dashboard
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Route Provinsi
Route::get('/admin/provinsi', [ProvinsiController::class, 'show'])->name('provinsi');
Route::get('admin/provinsi/create', [ProvinsiController::class, 'create'])->name('provinsi.create');
Route::post('/admin/provinsi/create', [ProvinsiController::class, 'store'])->name('provinsi.store');
Route::get('admin/provinsi/edit/{id}', [ProvinsiController::class, 'edit'])->name('provinsi.edit');
Route::put('admin/provinsi/update/{id}', [ProvinsiController::class, 'update'])->name('provinsi.update');
Route::delete('admin/provinsi/delete/{id}', [ProvinsiController::class, 'destroy'])->name('provinsi.destroy');

// Route KabKota
Route::get('/admin/kabkota', [KabKotaController::class, 'show'])->name('kabkota');
Route::get('admin/kabkota/create', [KabKotaController::class, 'create'])->name('kabkota.create');
Route::post('/admin/kabkota/create', [KabKotaController::class, 'store'])->name('kabkota.store');
Route::get('admin/kabkota/edit/{id}', [KabKotaController::class, 'edit'])->name('kabkota.edit');
Route::put('admin/kabkota/update/{id}', [KabKotaController::class, 'update'])->name('kabkota.update');
Route::delete('admin/kabkota/delete/{id}', [KabKotaController::class, 'destroy'])->name('kabkota.destroy');

// Route jenis faskes
Route::get('/admin/jenis', [JenisFaskesController::class, 'show'])->name('jenis');
Route::get('admin/jenis/create', [JenisFaskesController::class, 'create'])->name('jenis.create');
Route::post('/admin/jenis/create', [JenisFaskesController::class, 'store'])->name('jenis.store');;
Route::delete('admin/jenis/delete/{id}', [JenisFaskesController::class, 'destroy'])->name('jenis.destroy');

// Route Kategori faskes
Route::get('/admin/kategori', [KategoriController::class, 'show'])->name('kategori');
Route::get('admin/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/admin/kategori/create', [KategoriController::class, 'store'])->name('kategori.store');
Route::delete('admin/kategori/delete/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

// Route faskes
Route::get('/admin/faskes', [FaskesController::class, 'show'])->name('faskes');
Route::get('admin/faskes/create', [FaskesController::class, 'create'])->name('faskes.create');
Route::post('/admin/faskes/create', [FaskesController::class, 'store'])->name('faskes.store');
Route::get('admin/faskes/edit/{id}', [FaskesController::class, 'edit'])->name('faskes.edit');
Route::put('admin/faskes/update/{id}', [FaskesController::class, 'update'])->name('faskes.update');
Route::delete('admin/faskes/delete/{id}', [FaskesController::class, 'destroy'])->name('faskes.destroy');
