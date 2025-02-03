<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\UtilsController;
use App\Http\Controllers\DecretoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Builder;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('forgot_password');

Route::get('/profile', function () {
    return view('profile.edit');
})->name('perfil');


//users
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});






//Usuarios

Route::get('usuarios/nuevo', [UsuarioController::class, 'create'])->name('usuarios.nuevo');

Route::get('usuarios/listar', [UsuarioController::class, 'index'])->name('usuarios.listar');

Route::get('usuarios/data', [UsuarioController::class, 'getUsuariosData'])->name('usuarios.data');



Route::post('usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');
Route::post('usuarios/{usuario}/fallecer', [UsuarioController::class, 'marcarFallecido'])->name('usuario.fallecer');
Route::post('usuarios/{usuario}/modificar-porcentaje', [UsuarioController::class, 'modificarPorcentaje'])->name('porcentaje.modificar');

//decretos
Route::get('/decretos', [DecretoController::class, 'create'])->name('decretos.nuevo');


//materiales


//rutas de utilidades (medidas, sectores, etc)
Route::get('utils/sectores', [UtilsController::class, 'listarsectores'])->name('sectores.listar');
Route::post('uitls/sectores/store', [UtilsController::class, 'storesector'])->name('sectores.store');
Route::get('utils/sectores/destroy/{id}', [UtilsController::class, 'destroysector'])->name('sectores.destroy');

require __DIR__ . '/auth.php';
