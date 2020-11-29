<?php

namespace App\Http\Controllers;

use App\Models\salidas;
use Illuminate\Http\Request;

class SalidasController extends Controller
{
    public function index(){
        $salidas = salidas::all();
        return view('salidas.index', compact('salidas')   );
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
        return redirect(route('salidas.index.get'));
    }
    public function create(){
        return view('salidas.create');
    }

    public function show(){
        return view('show.index');
    }
}
