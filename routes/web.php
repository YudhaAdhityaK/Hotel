<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;

// Arahkan URL utama (/) ke daftar reservasi
Route::get('/', [ReservationController::class, 'index'])->name('reservations.index');

// CRUD lengkap
Route::resource('reservations', ReservationController::class)->except(['index']);

// Export PDF
Route::get('/export-pdf', [ReservationController::class, 'exportPdf'])->name('reservations.exportPdf');
