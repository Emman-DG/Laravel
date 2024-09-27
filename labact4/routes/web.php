<?php

use App\Http\Controllers\ReservationController;

Route::get('/reservation', [ReservationController::class, 'create'])->name('reservation.form');
Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');
