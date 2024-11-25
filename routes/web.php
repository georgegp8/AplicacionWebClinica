<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\ReservasController;
use App\Http\Controllers\ResultadoController;
use App\Http\Controllers\TestimoniosController;
use App\Http\Controllers\CitasController;

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Perfil de usuario (Rutas protegidas)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Constantes (Header y Footer)
Route::get('/header', function () {
    return view('constantes.header');
});
Route::get('/footer', function () {
    return view('constantes.footer');
});

// Servicios
Route::get('/', [ServiciosController::class, 'index'])->name('in_dex.index');
Route::get('/servicios/cirugias', [ServiciosController::class, 'viewServiciesCirugias'])->name('servicios.cirugias');
Route::get('/servicios/tratamientos', [ServiciosController::class, 'viewServiciesTratamiento'])->name('servicios.tratamientos');

// Resultados y Testimonios
Route::post('/resultados/cirugias', [TestimoniosController::class, 'store'])->name('cirugias.store');
Route::post('/resultados/tratamientos', [TestimoniosController::class, 'store'])->name('tratamientos.store');
Route::get('/resultados/cirugias', [ResultadoController::class, 'resultadosYtestimonioC'])->name('resultados.cirugias');
Route::get('/resultados/tratamientos', [ResultadoController::class, 'resultadosYtestimonioT'])->name('resultados.tratamientos');

// Nosotros
Route::get('/nosotros', function () {
    return view('nosotros.nosotros');
});

// Mapa
Route::get('/map', function () {
    return view('prueba');
});

// Pagos
Route::get('/reserva/pago', function () {
    return view('reservas.pago');
})->name('reserva.pago');
Route::post('/reserva/pago', function () {
    return response()->json(['message' => 'Pago procesado correctamente']);
});

// Citas
Route::get('/reserva/cita', [CitasController::class, 'index'])->name('reserva.cita');
Route::post('/reserva/cita', [CitasController::class, 'store'])->name('reserva.cita');

// Autenticación (Laravel Auth)
Auth::routes();
Route::get('/home', function () {
    return redirect('/admin');
})->name('home');

// Backend
// Admin Dashboard
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index')->middleware('auth');

// Administración de Usuarios
Route::prefix('admin/usuarios')->middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\UsuarioController::class, 'index'])->name('admin.usuarios.index');
    Route::get('/create', [App\Http\Controllers\UsuarioController::class, 'create'])->name('admin.usuarios.create');
    Route::post('/create', [App\Http\Controllers\UsuarioController::class, 'store'])->name('admin.usuarios.store');
    Route::get('/{id}', [App\Http\Controllers\UsuarioController::class, 'show'])->name('admin.usuarios.show');
    Route::get('/{id}/edit', [App\Http\Controllers\UsuarioController::class, 'edit'])->name('admin.usuarios.edit');
    Route::put('/{id}', [App\Http\Controllers\UsuarioController::class, 'update'])->name('admin.usuarios.update');
    Route::get('/{id}/confirm-delete', [App\Http\Controllers\UsuarioController::class, 'confirmDelete'])->name('admin.usuarios.confirmDelete');
    Route::delete('/{id}', [App\Http\Controllers\UsuarioController::class, 'destroy'])->name('admin.usuarios.destroy');
});

// Administración de Secretarias
Route::prefix('admin/secretarias')->middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\SecretariaController::class, 'index'])->name('admin.secretarias.index');
    Route::get('/create', [App\Http\Controllers\SecretariaController::class, 'create'])->name('admin.secretarias.create');
    Route::post('/create', [App\Http\Controllers\SecretariaController::class, 'store'])->name('admin.secretarias.store');
    Route::get('/{id}', [App\Http\Controllers\SecretariaController::class, 'show'])->name('admin.secretarias.show');
    Route::get('/{id}/edit', [App\Http\Controllers\SecretariaController::class, 'edit'])->name('admin.secretarias.edit');
    Route::put('/{id}', [App\Http\Controllers\SecretariaController::class, 'update'])->name('admin.secretarias.update');
    Route::get('/{id}/confirm-delete', [App\Http\Controllers\SecretariaController::class, 'confirmDelete'])->name('admin.secretarias.confirmDelete');
    Route::delete('/{id}', [App\Http\Controllers\SecretariaController::class, 'destroy'])->name('admin.secretarias.destroy');
});

// Administración de Pacientes
Route::prefix('admin/pacientes')->middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\PacienteController::class, 'index'])->name('admin.pacientes.index');
    Route::get('/create', [App\Http\Controllers\PacienteController::class, 'create'])->name('admin.pacientes.create');
    Route::post('/create', [App\Http\Controllers\PacienteController::class, 'store'])->name('admin.pacientes.store');
    Route::get('/{id}', [App\Http\Controllers\PacienteController::class, 'show'])->name('admin.pacientes.show');
    Route::get('/{id}/edit', [App\Http\Controllers\PacienteController::class, 'edit'])->name('admin.pacientes.edit');
    Route::put('/{id}', [App\Http\Controllers\PacienteController::class, 'update'])->name('admin.pacientes.update');
    Route::get('/{id}/confirm-delete', [App\Http\Controllers\PacienteController::class, 'confirmDelete'])->name('admin.pacientes.confirmDelete');
    Route::delete('/{id}', [App\Http\Controllers\PacienteController::class, 'destroy'])->name('admin.pacientes.destroy');
});

// Administración de Consultorios
Route::prefix('admin/consultorios')->middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\ConsultorioController::class, 'index'])->name('admin.consultorios.index');
    Route::get('/create', [App\Http\Controllers\ConsultorioController::class, 'create'])->name('admin.consultorios.create');
    Route::post('/create', [App\Http\Controllers\ConsultorioController::class, 'store'])->name('admin.consultorios.store');
    Route::get('/{id}', [App\Http\Controllers\ConsultorioController::class, 'show'])->name('admin.consultorios.show');
    Route::get('/{id}/edit', [App\Http\Controllers\ConsultorioController::class, 'edit'])->name('admin.consultorios.edit');
    Route::put('/{id}', [App\Http\Controllers\ConsultorioController::class, 'update'])->name('admin.consultorios.update');
    Route::get('/{id}/confirm-delete', [App\Http\Controllers\ConsultorioController::class, 'confirmDelete'])->name('admin.consultorios.confirmDelete');
    Route::delete('/{id}', [App\Http\Controllers\ConsultorioController::class, 'destroy'])->name('admin.consultorios.destroy');
});

// Administración de Horarios
Route::prefix('admin/horarios')->middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\HorarioController::class, 'index'])->name('admin.horarios.index');
    Route::get('/create', [App\Http\Controllers\HorarioController::class, 'create'])->name('admin.horarios.create');
    Route::post('/create', [App\Http\Controllers\HorarioController::class, 'store'])->name('admin.horarios.store');
    Route::get('/{id}', [App\Http\Controllers\HorarioController::class, 'show'])->name('admin.horarios.show');
    Route::get('/{id}/edit', [App\Http\Controllers\HorarioController::class, 'edit'])->name('admin.horarios.edit');
    Route::put('/{id}', [App\Http\Controllers\HorarioController::class, 'update'])->name('admin.horarios.update');
    Route::get('/{id}/confirm-delete', [App\Http\Controllers\HorarioController::class, 'confirmDelete'])->name('admin.horarios.confirmDelete');
    Route::delete('/{id}', [App\Http\Controllers\HorarioController::class, 'destroy'])->name('admin.horarios.destroy');
    Route::get('/consultorios/{id}', [App\Http\Controllers\HorarioController::class, 'cargar_datos_consultorio'])->name('admin.horarios.cargar_datos_consultorio');
});
