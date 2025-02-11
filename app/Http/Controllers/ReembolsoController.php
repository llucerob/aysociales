<?php

namespace App\Http\Controllers;

use App\Models\Reembolso;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Usuario;

class ReembolsoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('usuarios.listar-reembolso');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        // Obtener el usuario por el ID
        $usuario = Usuario::findOrFail($id);

        // Mostrar el formulario para crear un nuevo reembolso
        return view('usuarios.nuevo-reembolso', compact('usuario'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function reembolso(Request $request, $id)
    {
        // Obtener el usuario por el ID
        $usuario = Usuario::findOrFail($id);

        // Crear un nuevo reembolso
        $reembolso = new Reembolso();
        $reembolso->solicitud = $request->solicitud;
        $reembolso->cantidad = $request->cantidad;
        $reembolso->motivo = $request->motivo;
        $reembolso->boleta = $request->boleta;
        $reembolso->tipoprestacion = $request->prestacion;
        $reembolso->entregado = $request->entregado;

        // Asociar el reembolso al usuario con el usuario_id
        $reembolso->usuario_id = $usuario->id;

        // Guardar el reembolso
        $reembolso->save();

        // Redirigir con mensaje de éxito
        return redirect()->route('reembolso.mostrar', $usuario->id)->with('success', 'Reembolso creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Obtener el reembolso asociado al usuario
        $reembolso = Reembolso::where('usuario_id', $id)->first();

        if (!$reembolso) {
            return redirect()->route('reembolso.index')->with('error', 'No se encontró el reembolso para este usuario.');
        }

        // Mostrar la vista de detalles del reembolso
        return view('usuarios.mostrar-reembolso', compact('reembolso'));
    }

    /**
     * Get data for reembolsos (para mostrar en una tabla con DataTables).
     */
    public function getReembolsoData()
    {
        // Seleccionar los campos que queremos mostrar en la tabla
        $reembolsos = Reembolso::select(['id', 'cantidad', 'solicitud', 'motivo', 'tipoprestacion', 'boleta', 'entregado']);

        return DataTables::of($reembolsos)
            ->make(true);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reembolso $reembolso)
    {
        // Este método lo puedes usar si necesitas editar un reembolso
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reembolso $reembolso)
    {
        // Este método lo puedes usar para actualizar un reembolso
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reembolso $reembolso)
    {
        // Este método lo puedes usar para eliminar un reembolso
    }
}
