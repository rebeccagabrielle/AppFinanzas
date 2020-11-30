<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request){
        session()->forget('user_exist');
        session(['user_exist' => false]);
        session()->forget('name');
        session()->forget('id');
        return view('login');
    }

    public function login_action(Request $request)
    {
        $user = User::where('email', '=', $request->usuario)->where('password', '=', $request->pass)->get();
        $number = count($user);
        if($number > 0){
            $data = $user[0];
            session(['user_exist' => true]);
            session(['name' => $data->name]);
            session(['id' => $data->id]);
            return redirect('/entradas');
        }
        return redirect()->back()->with('alert', 'Usuario o contraseña erroneos');
    }

    public function log_out()
    {
        session()->forget('user_exist');
        session(['user_exist' => false]);
        return view('login');
    }



}