<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntradasController extends Controller
{
    public function index(){
        return view('entradas.index');
    }

    public function create(){
        return view('entradas.create');
    }

    public function show(){
        return view('entradas.show');
    }
}
