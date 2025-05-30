<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WompiController;

Route::get('/', function () {
    return view('landing');
});

// Confirmación de pago Wompi
Route::get('/wompi/confirmacion', [WompiController::class, 'confirmacion'])->name('wompi.confirmacion');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Rutas solo para estudiantes
global $router;
Route::middleware(['auth', 'role:estudiante'])->group(function () {
    Route::get('/estudiante', function () {
        return view('estudiante.dashboard');
    })->name('estudiante.dashboard');
});

// Cargar rutas de admin
require __DIR__.'/admin.php';
