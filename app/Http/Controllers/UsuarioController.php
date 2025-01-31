<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use App\Models\Sector;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Log;
use App\Models\RegistroSocial;

use Illuminate\Database\Eloquent\Builder;

class UsuarioController extends Controller
{
    public function index(Request $request)
    {

        return view('usuarios.listar-usuario'); // Asegúrate de que la vista sea la correcta
    }




    public function create()
    {
        $sectores = Sector::all();
        return view('usuarios.nuevo-usuario', compact('sectores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $registroSocial = new RegistroSocial();
        $registroSocial->folioid = $request->registro_social['folioid'];
        $registroSocial->porcentaje = $request->registro_social['porcentaje'];
        $registroSocial->grupo_familiar = $request->registro_social['grupo_familiar'];
        $registroSocial->save();


        $usuario = new usuario();
        $usuario->rut = $request->rut;
        $usuario->nombres = $request->nombres;
        $usuario->apellidos = $request->apellidos;
        $usuario->registro_social_id = $registroSocial->id;
        $usuario->telefono = $request->telefono;
        $usuario->correo = $request->correo;
        $usuario->fnac = $request->fnac;
        $usuario->save();

        // Redirige con un mensaje de éxito
        return redirect()->route('usuarios.listar-usuario')->with('success', 'Usuario y Registro Social creados correctamente.');
    }






    public function marcarFallecido(Request $request, Usuario $usuario)
    {
        $usuario->fallecido = true;
        $usuario->save();

        return redirect()->route('usuarios.listar-usuario')->with('success', 'Usuario marcado como fallecido.');
    }





    public function modificarPorcentaje(Request $request, Usuario $usuario)
    {
        $request->validate([
            'porcentaje' => 'required|numeric|min:0|max:100',
        ]);

        $usuario->porcentaje = $request->porcentaje;
        $usuario->save();

        return redirect()->route('usuarios.listar')->with('success', 'Porcentaje modificado exitosamente.');
    }



    public function getUsuariosData()
    {
        // Seleccionamos los campos que queremos mostrar en la tabla
        $usuarios = Usuario::select(['id', 'rut', 'nombres', 'telefono', 'correo']);


        return DataTables::of($usuarios)

            // ->addColumn('acciones', function ($usuario) {

            //     // Creamos el HTML con los botones de acción para cada usuario
            //     return '<button class="m-1 btn imprimir btn-secondary btn-sm" title="imprimir"><i class="fa fa-file-pdf-o"></i></button>
            //         <button class="m-1 btn devolucion btn-info btn-sm" title="Solicitar Devolución" data-bs-toggle="modal" data-bs-target="#modalDevolucion"><i class="fa fa-money"></i></button>
            //         <button class="m-1 btn aumentar btn-success btn-sm" title="Modificar %" data-bs-toggle="modal" data-bs-target="#modalAumentar"><i class="fa fa-plus"></i></button>
            //         <button class="m-1 btn btn-warning btn-sm editar" title="ver ficha"><i class="fa fa-book"></i></button>
            //         <button class="m-1 btn btn-danger fallecido btn-sm" title="Marcar como fallecido" data-bs-toggle="modal" data-bs-target="#modalFallecido"><i class="icofont icofont-skull-face"></i></button>';
            // })
            // ->rawColumns(['acciones'])  // Especificamos que el campo 'acciones' es HTML, por lo que debe ser procesado como tal.
            ->make(true);
    }


    public function edit(usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(usuario $usuario)
    {
        //
    }
}
