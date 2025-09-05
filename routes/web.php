<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard'); //dashboard route


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //BENEFICIARIOS == USUARIOS

     Route::get('/beneficiarios', [UsuariosController::class, 'index'])->name('beneficiarios.index');
    Route::get('/beneficiarios/create', [UsuariosController::class, 'create'])->name('beneficiarios.create');
    Route::post('/beneficiarios', [UsuariosController::class, 'store'])->name('beneficiarios.store');
    Route::get('/beneficiarios/{id}', [UsuariosController::class, 'show'])->name('beneficiarios.show');
    Route::post('/beneficiarios/{id}/update', [UsuariosController::class, 'update'])->name('beneficiarios.update');
    Route::post('beneficiarios/porcentaje/modificar', [UsuariosController::class, 'modificaporcentaje' ])->name('porcentaje.modificar');
    Route::get('beneficiarios/solicitar/{id}', [UsuariosController::class, 'solicitar'])->name('beneficiarios.solicitar');
    Route::post('beneficiarios/solicitar/{id}/parte1', [UsuariosController::class, 'solicitudparte1']);
    Route::post('beneficiarios/solicitar/{id}/parte2', [UsuariosController::class, 'solicitudparte2']);
    Route::get('beneficiarios/{id}/imprimir', [UsuariosController::class, 'imprimir'])->name('imprimir', '{id}');
    //Route::get('beneficiarios/{id}/ver', [UsuariosController::class, 'show']);
    Route::get('beneficiario/{id}/entregarmaterial', [UsuariosController::class, 'entregarmaterial'])->name('beneficiario.material');
    Route::post('material/entregar/', [UsuariosController::class, 'entregar'])->name('entregar.material');
    Route::get('beneficiario/{id}/devolvermaterial', [UsuariosController::class, 'devolvermaterial'])->name('beneficiario.devolvermaterial');
    Route::post('beneficiario/devolver', [UsuariosController::class, 'devolver'])->name('devolver.material');
    Route::post('beneficiario/creardevolucion', [UsuariosController::class, 'creadevolucion'])->name('crear.devolucion');
    Route::get('beneficiarios/listar/devoluciones', [UsuariosController::class, 'listardevoluciones'])->name('listar.devoluciones');
    Route::get('beneficiario/aceptar/rendicion/{id}', [UsuariosController::class, 'aceptarendicion'])->name('acepta.rendicion');
    Route::get('beneficiario/imprime/rendicion/{id}', [UsuariosController::class, 'imprimerendicion'])->name('imprime.rendicion');
    Route::get('beneficiario/eliminar/rendicion/{id}', [UsuariosController::class, 'eliminarrendicion'])->name('eliminar.rendicion');
    Route::post('beneficiario/agregar/cuenta/{id}', [UsuariosController::class, 'agregarcuenta'])->name('agregar.cuenta');
    Route::post('beneficiario/generardecretoreembolso', [UsuariosController::class, 'generardecretoreembolso'])->name('generar.decretoreembolsos');
    Route::get('beneficiario/crearnominareembolsos', [UsuariosController::class, 'crearnominareembolsos'])->name('crear.nominareembolsos');
    Route::get('beneficiarios/{id}/verpedidos', [UsuariosController::class, 'verpedidos'])->name('ver.pedidos');
    Route::post('beneficiario/fallecer/',[UsuariosController::class, 'fallecer'])->name('beneficiario.fallecer');
    Route::get('beneficiarios/historiaxficha/{id}', [UsuariosController::class, 'historiaxficha'])->name('historiaficha');
    Route::post('beneficiario/seleccion/reembolso', [UsuariosController::class, 'transparenciareembolso'])->name('transparencia.seleccionreembolso');
    Route::post('beneficiario/aporte/rechaza/{decreto}', [UsuariosController::class, 'rechazadecreto'])->name('rechaza.decreto');
    Route::get('beneficiario/aporte/acepta/{decreto}', [UsuariosController::class, 'aceptadecreto'])->name('acepta.decreto');
    Route::get('beneficiario/aportes/rectificacion/{decreto}', [UsuariosController::class, 'aportesfallas'])->name('aportes.fallas'); 
    Route::post('beneficiario/{id}/editarcuenta', [UsuariosController::class, 'editarcuenta'])->name('editar.cuenta');
    Route::get('beneficiario/reenviar/{decreto}', [UsuariosController::class, 'reenviadecreto'])->name('reenviar.decreto');

    

    
});

require __DIR__.'/auth.php';
