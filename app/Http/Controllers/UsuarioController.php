<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.nuevo-usuario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = new usuario();

        $usuario->nombres = $request->nombres;
        $usuario->apellidos = $request->apellidos;
        $usuario->rut = $request->rut;
        $usuario->fnac = $request->fnac;
        $usuario->telefono = $request->telefono;
        $usuario->email = $request->email;
        $usuario->registrosocial = $request->registrosocial;
        $usuario->porcentaje = $request->porcentaje;
        $usuario->grupofam = $request->grupofam;
        $usuario->direccion = $request->direccion;
        $usuario->sector = $request->sector;

        $usuario->save();

        return redirect()->route('vista_nuevo_usuario');
    }

    /**
     * Display the specified resource.
     */
    public function show(usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
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
