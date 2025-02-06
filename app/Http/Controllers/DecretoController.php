<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Sector;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;


class DecretoController extends Controller
{






    public function store()
    {

        // $registroSocial = new RegistroSocial();
        // $registroSocial->folioid = $request->registro_social['folioid'];
        // $registroSocial->porcentaje = $request->registro_social['porcentaje'];
        // $registroSocial->grupo_familiar = $request->registro_social['grupo_familiar'];
        // $registroSocial->save();

        // $usuario = new usuario();
        // $usuario->rut = $request->rut;
        // $usuario->nombres = $request->nombres;
        // $usuario->apellidos = $request->apellidos;
        // $usuario->registro_social_id = $registroSocial->id;
        // $usuario->telefono = $request->telefono;
        // $usuario->correo = $request->correo;
        // $usuario->fnac = $request->fnac;
        // $usuario->save();

        // Redirige con un mensaje de éxito
        // return redirect()->route('usuarios.listar')->with('success', 'Usuario y Registro Social creados correctamente.');
    }
}
