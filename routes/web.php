<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\UtilsController;
use App\Http\Controllers\DecretoController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\ReembolsoController;

use App\Http\Controllers\SolicitudController;
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

Route::get('usuarios/editar', [UsuarioController::class, 'editar'])->name('usuario.update');

Route::post('usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');

Route::get('/usuario/editar/{id}', [UsuarioController::class, 'mostrar'])->name('usuario.mostrar');
Route::put('/usuario/editar/{id}', [UsuarioController::class, 'editar'])->name('usuario.editar');

Route::get('usaurios/pdf', [UsuarioController::class, 'dowload']);
Route::post('usuarios/{usuario}/modificar-porcentaje', [UsuarioController::class, 'modificarPorcentaje'])->name('porcentaje.modificar');

//decretos
Route::get('/decretos', [DecretoController::class, 'create'])->name('decretos.nuevo');


//materiales
Route::get('materiales/listar', [MaterialController::class, 'index'])->name('materiales.vista');
Route::get('materiales/data', [MaterialController::class, 'getMaterialesdata'])->name('materiales.data');

//rutas de utilidades (medidas, sectores, etc)
Route::get('utils/sectores', [UtilsController::class, 'listarsectores'])->name('sectores.listar');
Route::post('utils/sectores/store', [UtilsController::class, 'storesector'])->name('sectores.store');
Route::get('utils/sectores/destroy/{id}', [UtilsController::class, 'destroysector'])->name('sectores.destroy');


//Reembolsos

Route::get('reembolso/listar', [ReembolsoController::class, 'index'])->name('reembolso.vista');
Route::get('rembolso/data', [ReembolsoController::class, 'getReembolsoData'])->name('reembolso.data');

Route::get('usuarios/reembolso/{id}/nuevo', [ReembolsoController::class, 'create'])->name('reembolso.nuevo');

Route::post('usuarios/reembolso/{id}', [ReembolsoController::class, 'reembolso'])->name('reembolso.store');

//Municipal

Route::get('municipal/listar', [SolicitudController::class, 'index'])->name('muni.listar');
Route::get('municipal/data', [SolicitudController::class, 'getSolicitudData'])->name('muni.data');




require __DIR__ . '/auth.php';
