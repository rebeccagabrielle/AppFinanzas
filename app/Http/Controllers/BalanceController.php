<?php

namespace App\Http\Controllers;

use App\Models\entradas;
use App\Models\salidas;
use Illuminate\Http\Request;

class BalanceController extends Controller
{
    public function index()
    {
        $entradas = entradas::where('email', '=', session('id')) ->get();
        $salidas = salidas::where('email', '=', session('id')) ->get();

    }
}
