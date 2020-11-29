<?php

namespace App\Http\Controllers;

use App\Models\salidas;
use Illuminate\Http\Request;

class SalidasController extends Controller
{
    public function index(){
        return view('salidas.index');
    }

    public function create_post(Request $request)
    {
        //Tratamiento imagen
        $imageName = time() . '.' . $request->fotoSalida->extension();
        $request->fotoSalida->move(public_path('images'), $imageName);
        $salidas = new salidas();
        $salidas->file = $imageName;
        $salidas->tipo = $request->tipoSalida;
        $salidas->fecha = $request->fechaSalida;
        $salidas->monto = $request->montoSalida;
        $salidas->save();
        return redirect(route('salidas.show.get'));
    }
    public function create(){
        return view('salidas.create');
    }

    public function show(){
        $salida = salidas::all();
        return view('salidas.show', compact('salida'));
    }
}
