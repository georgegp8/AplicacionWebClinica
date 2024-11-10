<?php
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [ServiciosController::class, 'index'])->name('in_dex.index');
Route::get('/servicios/cirugias', [ServiciosController::class, 'viewServiciesCirugias'])->name('servicios.cirugias');
Route::get('/servicios/tratamientos', [ServiciosController::class, 'viewServiciesTratamiento'])->name('servicios.tratamientos');
Route::get('/nosotros', function () {
    return view('nosotros.nosotros');
});
Route::resource('/index/reservas', ReservasController::class);

Route::get('/map', function () {
    return view('map');
});
require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Rutas Backend */
/* Rutas para el admin */
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index')
->middleware('auth');

/* Rutas para el usuario */
Route::get('/admin/usuarios', [App\Http\Controllers\UsuarioController::class, 'index'])->name('admin.usuarios.index')
->middleware('auth');