<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Rules\ValidRut;
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

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar el RUT y otros campos
        $request->validate([# validate se ejecuta antes que store
            'rut' => ['required', new ValidRut],

        ]);

        // Crear un nuevo usuario con los datos validados

    }

    /**
     * Display the specified resource.
     */
    public function show(usuario $usuario)
    {

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
