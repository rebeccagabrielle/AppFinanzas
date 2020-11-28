<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalidasController extends Controller
{
    public function index(){
        return view('salidas.index');
    }

    public function create(){
        return view('salidas.create');
    }

    public function show(){
        return view('salidas.show');
    }
}
