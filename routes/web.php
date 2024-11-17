<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/header', function () {
    return view('constantes.header');
});
Route::get('/footer', function () {
    return view('constantes.footer');
});


use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\ReservasController;
use App\Http\Controllers\ResultadoController;
use App\Http\Controllers\TestimoniosController;

Route::get('/', [ServiciosController::class, 'index'])->name('in_dex.index');
Route::get('/servicios/cirugias', [ServiciosController::class, 'viewServiciesCirugias'])->name('servicios.cirugias');
Route::get('/servicios/tratamientos', [ServiciosController::class, 'viewServiciesTratamiento'])->name('servicios.tratamientos');


Route::post('/resultados/cirugias', [TestimoniosController::class, 'store'])->name('cirugias.store');
Route::post('/resultados/tratamientos', [TestimoniosController::class, 'store'])->name('tratamientos.store');

Route::get('/resultados/cirugias', [ResultadoController::class, 'resultadosYtestimonioC'])->name('resultados.cirugias');
Route::get('/resultados/tratamientos', [ResultadoController::class, 'resultadosYtestimonioT'])->name('resultados.tratamientos');


Route::get('/nosotros', function () {
    return view('nosotros.nosotros');
});
Route::resource('/index/reserva', ReservasController::class);

Route::get('/map', function () {
    return view('map');
});
Route::get('/reserva/pago', function () {
    return view('reservas.pago');
});
Route::get('/reserva/cita', function () {
    return view('reservas.cita');
});
require __DIR__.'/auth.php';

