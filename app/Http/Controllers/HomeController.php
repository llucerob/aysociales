<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
          
        if(auth()->user()->hasRole('admin')) {

            

            $actividad = [];
            $actividad['proveedores']   = (int)Proveedor::count();
            $actividad['en_proceso']    = Actividad::where('estado', 'en proceso')->count();
            $actividad['por_valorizar'] = Actividad::where('estado', 'terminado')->count();
            $actividad['valorizada']    = Actividad::where('estado', 'valorizado')->count();

            //dd($actividad);


            return view('dashboard.admin', compact('actividad'));
        }
    }
}
