<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RolesPermisosController;
use App\Http\Controllers\UniversidadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('panel');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /* Rutas del sistema sobre creación de horarios */
    Route::resources([
    '/roles_permisos' => RolesPermisosController::class,
    '/universidad' => UniversidadController::class
    ]);
});

require __DIR__.'/auth.php';
