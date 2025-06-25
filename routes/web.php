<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\LaporanController;


use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'prevent-back-history'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/transaksi', [TransactionController::class, 'index'])->name('transaksi.index');
    Route::get('/transaksi/tambah', [TransactionController::class, 'create'])->name('transaksi.create');
    Route::post('/transaksi', [TransactionController::class, 'store'])->name('transaksi.store');
    Route::put('/transaksi/{id}', [TransactionController::class, 'update'])->name('transaksi.update');
    Route::delete('/transaksi/{id}', [TransactionController::class, 'destroy'])->name('transaksi.destroy');
    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
});
// Tambahkan jika ada fitur ekspor PDF
Route::get('/laporan/export', [LaporanController::class, 'export'])
    ->name('laporan.export')
    ->middleware('auth');  

require __DIR__.'/auth.php';
