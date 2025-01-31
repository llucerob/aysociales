<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class DecretoController extends Controller
{
    public function create()
    {

        return view('transparencia.decreto');
    }
}
