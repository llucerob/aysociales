<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sector;

class UtilsController extends Controller
{
    public function listarsectores()
    {
        $sectores = Sector::all();
        return view('utils.sectores', compact('sectores'));
    }

    public function storesector(Request $request)
    {
        $sector = new Sector();
        $sector->nombre = $request->nombre;
        $sector->save();
        return redirect()->route('sectores.listar');
    }

    public function destroysector($id)
    {
        $sector = Sector::find($id);
        $sector->delete();
        return redirect()->route('sectores.listar');
    }
    
}
