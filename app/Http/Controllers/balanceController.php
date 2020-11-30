<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class balanceController extends Controller
{
    public function __invoke(){
        return view('balance');
    }
}
