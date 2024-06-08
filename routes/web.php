<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaketWisataController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');

// Dashboard route
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Paket Wisata routes
Route::prefix('paket')->name('paket.')->group(function () {
    Route::get('/', [PaketWisataController::class, 'index'])->name('index');
    Route::get('/create', [PaketWisataController::class, 'create'])->name('create');
    Route::post('/', [PaketWisataController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [PaketWisataController::class, 'edit'])->name('edit');
    Route::put('/{id}', [PaketWisataController::class, 'update'])->name('update');
    Route::delete('/{id}', [PaketWisataController::class, 'destroy'])->name('destroy');
    Route::get('/print', [PaketWisataController::class, 'print'])->name('print');
});
