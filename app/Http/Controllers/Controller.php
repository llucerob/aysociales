<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

class PostController extends Controller
{


    public function index ()
    {
        $_POST = DB::table('decretos2')->get();
        return view('pruebas',['decretos'=>$_POST]);
    }
}
