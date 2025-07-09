<?php

use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ReservationController::class, 'index']);
Route::resource('reservations', ReservationController::class);
Route::get('/export-pdf', [ReservationController::class, 'exportPdf'])->name('reservations.exportPdf');