<?php

namespace App\Http\Controllers;

use App\Models\entradas;
use Illuminate\Http\Request;

class EntradasController extends Controller
{
    public function index(){
        return view('entradas.index');
    }

    public function create(){
        $entrada = new entradas();
        $entrada->tipo = "Prueba";
        $entrada->monto = 100.10;
        $entrada->save();
        return view('entradas.create');
    }

    public function show(){
        return view('entradas.show');
    }
}
