<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Yajra\DataTables\Facades\DataTables;


class SolicitudController extends Controller





{
    public function index()
    {

        $usuarios = Usuario::all();
        return view('pdfs.solicitud');
    }

    public function getSolicitudData()
    {
        // Obtenemos los usuarios con sus relaciones necesarias
        $usuarios = Usuario::with(['historial_entregas', 'sector', 'solicitud'])  // Eager Loading
            ->select(['rut', 'nombres', 'apellidos', 'telefono', 'correo'])
            ->get();

        // Generamos el DataTable
        return DataTables::of($usuarios)
            // Agregamos una columna 'entrega' que toma el folio de historial_entregas
            ->addColumn('entrega', function ($usuario) {
                return $usuario->historial_entregas->isNotEmpty()
                    ? $usuario->historial_entregas->first()->folioid
                    : 'N/A';
            })
            // Agregamos una columna 'atendido' que también puede tomar datos de historial_entregas
            ->addColumn('atendido', function ($usuario) {
                return $usuario->historial_entregas->isNotEmpty()
                    ? $usuario->historial_entregas->first()->atendido
                    : 'N/A';
            })
            // Agregamos una columna 'sector' que toma el nombre del sector
            ->addColumn('sector', function ($usuario) {
                return $usuario->sector ? $usuario->sector->nombre : 'N/A';
            })
            // Si también necesitas traer el domicilio de la tabla de solicitudes, lo agregamos aquí
            ->addColumn('domicilio', function ($usuario) {
                return $usuario->solicitud ?
                    ($usuario->solicitud->domicilio == 1 ? 'Envío a domicilio' : 'Retiro en local')
                    : 'N/A';
            })
            ->make(true);
        return view('pdfs.solicitud', compact('usuarios'));
    }




    // 'direccion' => $usuario->direccion,
    // 'sector' => $usuario->sector,
    // 'telefono' => $usuario->telefono,
    // 'correo' => $usuario->correo,

    // 'atendido' => $atendido, historial_entrega
    // // 'fechasolicitud' => $fechasolicitud, solicitudes de momento ocupar created at



    // 'domicilio' => $domicilio historial de entregas de momento usar entrega

    // 'productos' => $productos,?????








}
