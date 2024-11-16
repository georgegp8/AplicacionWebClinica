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

/* Rutas para el admin-usuario */
Route::get('/admin/usuarios', [App\Http\Controllers\UsuarioController::class, 'index'])->name('admin.usuarios.index')
->middleware('auth');
Route::get('/admin/usuarios/create', [App\Http\Controllers\UsuarioController::class, 'create'])->name('admin.usuarios.create')
->middleware('auth');
Route::post('/admin/usuarios/create', [App\Http\Controllers\UsuarioController::class, 'store'])->name('admin.usuarios.store')
->middleware('auth');
Route::get('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'show'])->name('admin.usuarios.show')
->middleware('auth');
Route::get('/admin/usuarios/{id}/edit', [App\Http\Controllers\UsuarioController::class, 'edit'])->name('admin.usuarios.edit')
->middleware('auth');
Route::put('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'update'])->name('admin.usuarios.update')
->middleware('auth');
Route::get('/admin/usuarios/{id}/confirm-delete', [App\Http\Controllers\UsuarioController::class, 'confirmDelete'])->name('admin.usuarios.confirmDelete')
->middleware('auth');
Route::delete('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'destroy'])->name('admin.usuarios.destroy')
->middleware('auth');

/* Rutas para el admin - secretarias */
Route::get('/admin/secretarias', [App\Http\Controllers\SecretariaController::class, 'index'])->name('admin.secretarias.index')
->middleware('auth');
Route::get('/admin/secretarias/create', [App\Http\Controllers\SecretariaController::class, 'create'])->name('admin.secretarias.create')
->middleware('auth');
Route::post('/admin/secretarias/create', [App\Http\Controllers\SecretariaController::class, 'store'])->name('admin.secretarias.store')
->middleware('auth');
Route::get('/admin/secretarias/{id}', [App\Http\Controllers\SecretariaController::class, 'show'])->name('admin.secretarias.show')
->middleware('auth');
Route::get('/admin/secretarias/{id}/edit', [App\Http\Controllers\SecretariaController::class, 'edit'])->name('admin.secretarias.edit')
->middleware('auth');
Route::put('/admin/secretarias/{id}', [App\Http\Controllers\SecretariaController::class, 'update'])->name('admin.secretarias.update')
->middleware('auth');
Route::get('/admin/secretarias/{id}/confirm-delete', [App\Http\Controllers\SecretariaController::class, 'confirmDelete'])->name('admin.secretarias.confirmDelete');
Route::delete('/admin/secretarias/{id}', [App\Http\Controllers\SecretariaController::class, 'destroy'])->name('admin.secretarias.destroy')
->middleware('auth');
