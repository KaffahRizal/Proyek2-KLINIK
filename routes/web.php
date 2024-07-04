<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProvinsiController;
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
});

require __DIR__.'/auth.php';

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/admin/provinsi', [ProvinsiController::class, 'show'])->name('provinsi');
Route::get('admin/provinsi/create', [ProvinsiController::class, 'create'])->name('provinsi.create');
Route::post('/admin/provinsi/create', [ProvinsiController::class, 'store'])->name('provinsi.store');
Route::get('admin/provinsi/edit/{id}', [ProvinsiController::class, 'edit'])->name('provinsi.edit');
Route::put('admin/provinsi/update/{id}', [ProvinsiController::class, 'update'])->name('provinsi.update');
Route::delete('admin/provinsi/delete/{id}', [ProvinsiController::class, 'destroy'])->name('provinsi.destroy');

