<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $materiales = Material::all();
        return view('materiales.listar-materiales', compact('materiales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //     $materiales = Material::all();
        //     return view('materiales.listar-materiales', compact('materiales'));
        // }

        /**}
         * Store a newly created resource in storage.
         */
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Material $material)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Material $material)
    {
        //
    }

    public function getMaterialesdata()
    {
        // Seleccionamos los campos que queremos mostrar en la tabla
        $material = Material::select(['nombre', 'categoria_id', 'stock', 'limite', 'limiteurgencia', 'medida']);

        return DataTables::of($material)
            ->make(true);

        // ->addColumn('acciones', function ($usuario) {
        //     // Creamos el HTML con los botones de acción para cada usuario
        //     return '<button class="m-1 btn imprimir btn-secondary btn-sm" title="Imprimir"><i class="fa fa-file-pdf-o"></i></button>
        //         <button class="m-1 btn devolucion btn-info btn-sm" title="Solicitar Devolución" data-bs-toggle="modal" data-bs-target="#modalDevolucion"><i class="fa fa-money"></i></button>
        //         <button class="m-1 btn aumentar btn-success btn-sm" title="Modificar %" data-bs-toggle="modal" data-bs-target="#modalAumentar"><i class="fa fa-plus
        // ->addColumn('acciones', function ($usuario) {
        //     // Creamos el HTML con los botones de acción para cada usuario
        //     return '<button class="m-1 btn imprimir btn-secondary btn-sm" title="Imprimir"><i class="fa fa-file-pdf-o"></i></button>
        //         <button class="m-1 btn devolucion btn-info btn-sm" title="Solicitar Devolución" data-bs-toggle="modal" data-bs-target="#modalDevolucion"><i class="fa fa-money"></i></button>
        //         <button class="m-1 btn aumentar btn-success btn-sm" title="Modificar %" data-bs-toggle="modal" data-bs-target="#modalAumentar"><i class="fa fa-plus"></i></button>
        //         <button class="m-1 btn btn-warning btn-sm editar" title="Ver ficha"><i class="fa fa-book"></i></button>
        //         <button class="m-1 btn btn-danger fallecido btn-sm" title="Marcar como fallecido" data-bs-toggle="modal" data-bs-target="#modalFallecido"><i class="icofont icofont-skull-face"></i></button>';
        // })
        // ->rawColumns(['acciones']) // Especificamos que el campo 'acciones' es HTML, por lo que debe ser procesado como tal.
        // ->make(true); // Esto debe ir al final de la cadena
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Material $material)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Material $material)
    {
        //
    }
}
