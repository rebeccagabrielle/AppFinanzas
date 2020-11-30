<?php

namespace App\Http\Controllers;

use App\Models\entradas;
use App\Models\salidas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Symfony\Component\String\b;

class BalanceController extends Controller
{
    public function index()
    {
        $entradas = entradas::where('user_id', '=', session('id')) ->get();
        $salidas = salidas::where('user_id', '=', session('id')) ->get();
        $query = DB::select('SELECT SUM(entradas.monto) as entradas,SUM(salidas.monto) as salidas , SUM(entradas.monto) - SUM(salidas.monto) as resultado FROM entradas, salidas WHERE entradas.user_id = ? AND salidas.user_id = ?  ',[session('id'),session('id')]);

        
        return view('balance', ['resultados' => $query[0], 'entradas' => $entradas , 'salidas' => $salidas ]);
    }
}
