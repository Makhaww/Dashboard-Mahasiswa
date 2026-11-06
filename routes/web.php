<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DashboardController;

Route::get('/', fn () => redirect()->route('dashboard'));

Route::get('/dashboard', function () {
    return view('dashboard', ['admin' => 'Administrator']);
})->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/mahasiswa', [DashboardController::class, 'index'])->name('mahasiswa.index');
Route::view('/laporan', 'dashboard-placeholder', ['judul' => 'Laporan'])->name('laporan');
Route::resource('produk', ProdukController::class);
