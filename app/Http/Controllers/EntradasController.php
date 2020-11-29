<?php

namespace App\Http\Controllers;

use App\Models\entradas;
use Illuminate\Http\Request;

class EntradasController extends Controller
{
    public function index()
    {
        return view('entradas.index');
    }

    public function create()
    {
        return view('entradas.create');
    }


    public function create_post(Request $request)
    {
        //Tratamiento imagen
        $imageName = time() . '.' . $request->fotoEntrada->extension();
        $request->fotoEntrada->move(public_path('images'), $imageName);
        //  


        $entrada = new entradas();
        $entrada->file = $imageName;
        $entrada->tipo = $request->tipoEntrada;
        $entrada->fecha = $request->fechaEntrada;
        $entrada->monto = $request->montoEntrada;
        return $entrada;
    }



    public function show()
    {
        return view('entradas.show');
    }
}
