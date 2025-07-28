<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beneficiario;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;
use App\Models\RegistroSocial;
use App\Models\Sector;
use App\Models\solicitud;
use App\Models\CuentaBancaria;
use App\Models\Categoria;
use App\Models\Comentario;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $beneficiario = Beneficiario::all();

             
       
        //dd(Carbon::parse($b->fnac)->age);

        return view('beneficiarios.listar-beneficiarios', ['beneficiarios' => $beneficiario]);
    }

    public function ajaxbeneficiarios(){

        $ben = Beneficiario::all();
        $arr = [];

        foreach($ben  as $key => $b ){

            if($b->fallecido == 'V'){
            
            $arr[$key]['rut']                   = $b->rut;
            $arr[$key]['nombre']                = $b->nombres.' '.$b->apellidos.' ('.Carbon::parse($b->fnac)->age.' Años)';

            if($b->registrosocial->updated_at == null){
                $arr[$key]['registrosocial']    = $b->registrosocial->folioid.' ('.$b->registrosocial->porcentaje.'% Fecha: '.$b->registrosocial->fechainforme.')';
            }else{
                $arr[$key]['registrosocial']    = $b->registrosocial->folioid.' ('.$b->registrosocial->porcentaje.'% Fecha: '.date_format($b->registrosocial->updated_at, 'd-m-Y').')';

            }
            
            $arr[$key]['direccion']             = $b->direccion.' ,'.$b->sector;
            $arr[$key]['id']                    = $b->id;
            $arr[$key]['comentario']            = $b->comentario;
            $arr[$key]['idficha']               = $b->registrosocial->id;
            $arr[$key]['porcentaje']            = $b->registrosocial->porcentaje;
                
            }

        }

           //dd($arr);
        
        return DataTables($arr)->tojson();

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sectores = Sector::all();
        
        return view('beneficiarios.nuevo-beneficiario', ['sector' => $sectores]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $beneficiario = new Beneficiario;
        
        $beneficiario->nombres          = $request->nombres;
        $beneficiario->apellidos        = $request->apellidos;
        $beneficiario->rut              = $request->rut;
        $beneficiario->fnac             = $request->fnac;
        $beneficiario->direccion        = $request->direccion;
        $beneficiario->sector           = $request->sector;
        $beneficiario->telefono         = $request->telefono;
        $beneficiario->grupofamiliar    = $request->grupofam;
        $beneficiario->correo           = $request->correo;
        $beneficiario->comentario       = $request->comentario;

        

        $registrosocial = Registrosocial::all();

        foreach ($registrosocial as $r){

            if($r->folioid == $request->registrosocial){
                $r->porcentaje = $request->porcentaje;
                $r->update();
                $beneficiario->registrosociales_id = $r->id;


            }

        }


        if(empty($beneficiario->registrosociales_id)){
            
            $registro               = new Registrosocial;
            $registro->folioid      = $request->registrosocial;
            $registro->porcentaje   = $request->porcentaje;
            $registro->save();
            $beneficiario->registrosociales_id = $registro->id;


        }

        $beneficiario->save();





        return redirect()->route('beneficiarios.index')->with('success', 'Se ha creado un nuevo beneficiario' );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $beneficiario   = Beneficiario::findOrFail($id);
        $sector         =    Sector::all();
        

        return view('beneficiarios.editar-beneficiario', ['beneficiario' => $beneficiario, 'sector' => $sector]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $beneficiario = Beneficiario::findOrFail($id);

        $beneficiario->nombres          = $request->nombres;
        $beneficiario->apellidos        = $request->apellidos;
        $beneficiario->rut              = $request->rut;
        $beneficiario->fnac             = $request->fnac;
        $beneficiario->direccion        = $request->direccion;
        $beneficiario->sector           = $request->sector;
        $beneficiario->telefono         = $request->telefono;
        $beneficiario->correo           = $request->correo;
        $beneficiario->grupofamiliar    = $request->grupofam;
        $beneficiario->comentario       = $request->comentario;

        //dd($beneficiario->registrosocial);

        $registrosocial = Registrosocial::all();

        
        $r = DB::table('registrosociales')->where('folioid', $request->registrosocial)->first();

        //dd($r->id);

       
        
        if(isset($request->registro)){
            if(isset($r)){

                $registro               = Registrosocial::findOrFail($r->id);

                $registro->folioid      = $request->registrosocial;
                $registro->porcentaje   = $request->porcentaje;
                $registro->update();
                $beneficiario->registrosociales_id = $r->id; 

            }else{
                $registro               = new Registrosocial;
                $registro->folioid      = $request->registrosocial;
                $registro->porcentaje   = $request->porcentaje;
                $registro->save();
                $beneficiario->registrosociales_id = $registro->id;

            }              
        }
        

        $beneficiario->update();





        return redirect()->back()->with('success', 'Se ha actualizado el beneficiario' );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function modificaporcentaje(Request $request){

        $registrosocial = Registrosocial::findOrFail($request->registro);

        $registrosocial->porcentaje = $request->porcentaje;

        $registrosocial->update();

        return redirect()->route('beneficiarios.index');

    }
}
